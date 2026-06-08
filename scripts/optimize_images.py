#!/usr/bin/env python3
"""Optimize site images: WebP conversion, PNG compression, remove originals."""
from __future__ import annotations

import os
from pathlib import Path

from PIL import Image

ROOT = Path(__file__).resolve().parent.parent
ASSETS = ROOT / "assets"
SERVICES = ASSETS / "images" / "services"

WEBP_QUALITY = 82
PNG_OPTIMIZE = True

# Unused legacy assets (safe to remove after optimization)
REMOVE_FILES = [
    ASSETS / "appsdeddy-logo-full-backup.png",
    ASSETS / "appsdeddy-logo-white.png",
    ASSETS / "appsdeddy-logo.png",
    ASSETS / "logo.png",
    ASSETS / "appsdeddy-logo.svg",
]


def save_webp(img: Image.Image, dest: Path, quality: int = WEBP_QUALITY) -> int:
    if img.mode not in ("RGB", "RGBA"):
        img = img.convert("RGBA" if "A" in img.getbands() else "RGB")
    img.save(dest, "WEBP", quality=quality, method=6)
    return dest.stat().st_size


def optimize_png(img: Image.Image, dest: Path) -> int:
    if img.mode == "P":
        img = img.convert("RGBA")
    img.save(dest, "PNG", optimize=PNG_OPTIMIZE, compress_level=9)
    return dest.stat().st_size


def process_service_jpegs() -> None:
    for src in sorted(SERVICES.glob("*.jpg")):
        with Image.open(src) as img:
            img = img.convert("RGB")
            max_w = 1400
            if img.width > max_w:
                ratio = max_w / img.width
                img = img.resize((max_w, int(img.height * ratio)), Image.Resampling.LANCZOS)
            webp_path = src.with_suffix(".webp")
            before = src.stat().st_size
            after = save_webp(img, webp_path)
            src.unlink()
            print(f"  {src.name}: {before//1024}KB -> {webp_path.name}: {after//1024}KB")


def process_brand_assets() -> None:
    logo_src = ASSETS / "appsdeddy-logo-full.png"
    if logo_src.exists():
        with Image.open(logo_src) as img:
            if img.width > 440:
                img = img.resize((440, max(1, int(img.height * (440 / img.width)))), Image.Resampling.LANCZOS)
            webp_path = ASSETS / "appsdeddy-logo-full.webp"
            png_path = ASSETS / "appsdeddy-logo-full.png"
            before = logo_src.stat().st_size
            webp_size = save_webp(img, webp_path, quality=90)
            png_size = optimize_png(img, png_path)
            print(f"  logo: {before//1024}KB -> webp {webp_size//1024}KB, png {png_size//1024}KB")

    fav_src = ASSETS / "appsdeddy-favicon-daddy.png"
    if fav_src.exists():
        with Image.open(fav_src) as img:
            img = img.convert("RGBA")
            img = img.resize((192, 192), Image.Resampling.LANCZOS)
            webp_path = ASSETS / "appsdeddy-favicon-daddy.webp"
            png_path = ASSETS / "appsdeddy-favicon-daddy.png"
            before = fav_src.stat().st_size
            webp_size = save_webp(img, webp_path, quality=85)
            png_size = optimize_png(img, png_path)
            # 32px favicon for browsers
            small = img.resize((32, 32), Image.Resampling.LANCZOS)
            small_path = ASSETS / "favicon-32x32.png"
            optimize_png(small, small_path)
            print(f"  favicon: {before//1024}KB -> webp {webp_size//1024}KB, png {png_size//1024}KB")


def remove_legacy() -> None:
    for path in REMOVE_FILES:
        if path.exists():
            path.unlink()
            print(f"  removed {path.name}")


def main() -> None:
    print("Service images:")
    process_service_jpegs()
    print("Brand assets:")
    process_brand_assets()
    print("Cleanup:")
    remove_legacy()
    print("Done.")


if __name__ == "__main__":
    main()
