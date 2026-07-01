"""Export LinkedIn profile photo at 800x800 px (1:1, founder-section style)."""
from __future__ import annotations

from pathlib import Path

from PIL import Image, ImageEnhance, ImageOps

ROOT = Path(__file__).resolve().parents[1]
PHOTO = ROOT / "assets" / "images" / "team" / "faizan-khan.jpg"
OUT = ROOT / "assets" / "marketing" / "linkedin-profile-founder.png"

SIZE = 800  # LinkedIn minimum 400px; 800px for sharp retina display


def main() -> None:
    photo = Image.open(PHOTO).convert("RGB")

    # Square crop with face centered for LinkedIn's circular display mask.
    photo = ImageOps.fit(photo, (SIZE, SIZE), method=Image.Resampling.LANCZOS, centering=(0.5, 0.20))
    photo = ImageEnhance.Contrast(ImageOps.grayscale(photo).convert("RGB")).enhance(1.08)
    photo = ImageEnhance.Brightness(photo).enhance(1.02)

    OUT.parent.mkdir(parents=True, exist_ok=True)
    photo.save(OUT, "PNG", optimize=True)
    print(f"Saved {OUT} ({SIZE}x{SIZE})")


if __name__ == "__main__":
    main()
