"""Export LinkedIn profile banner at official 1584x396 px."""
from __future__ import annotations

from pathlib import Path

from PIL import Image, ImageDraw, ImageEnhance, ImageFont, ImageOps

ROOT = Path(__file__).resolve().parents[1]
PHOTO = ROOT / "assets" / "images" / "team" / "faizan-khan.jpg"
OUT = ROOT / "assets" / "marketing" / "linkedin-banner-founder.png"

W, H = 1584, 396
LEFT_W = int(W * 0.48)


def load_font(size: int, bold: bool = False) -> ImageFont.FreeTypeFont | ImageFont.ImageFont:
    candidates = [
        Path(r"C:\Windows\Fonts\segoeuib.ttf") if bold else Path(r"C:\Windows\Fonts\segoeui.ttf"),
        Path(r"C:\Windows\Fonts\arialbd.ttf") if bold else Path(r"C:\Windows\Fonts\arial.ttf"),
    ]
    for path in candidates:
        if path.exists():
            return ImageFont.truetype(str(path), size=size)
    return ImageFont.load_default()


def draw_gradient_text(draw: ImageDraw.ImageDraw, xy: tuple[int, int], text: str, font: ImageFont.ImageFont) -> None:
    x, y = xy
    start = (99, 102, 241)
    end = (236, 72, 153)
    for i, ch in enumerate(text):
        t = i / max(len(text) - 1, 1)
        color = tuple(int(start[j] + (end[j] - start[j]) * t) for j in range(3))
        draw.text((x, y), ch, font=font, fill=color)
        x += draw.textlength(ch, font=font)


def build_photo_panel() -> Image.Image:
    """Full-opacity grayscale portrait for the left panel."""
    photo = Image.open(PHOTO).convert("RGB")
    # Shift face right/up so LinkedIn profile circle (bottom-left) covers less of the face.
    photo = ImageOps.fit(photo, (LEFT_W, H), method=Image.Resampling.LANCZOS, centering=(0.62, 0.16))
    photo = ImageEnhance.Contrast(ImageOps.grayscale(photo).convert("RGB")).enhance(1.08)

    panel = Image.new("RGB", (LEFT_W, H), "#d4d4d4")
    panel.paste(photo, (0, 0))

    # Soft blend only on the right edge of the photo panel.
    fade = Image.new("L", (LEFT_W, H), 0)
    fade_draw = ImageDraw.Draw(fade)
    fade_start = int(LEFT_W * 0.78)
    for x in range(LEFT_W):
        if x < fade_start:
            alpha = 0
        else:
            alpha = int(255 * ((x - fade_start) / max(LEFT_W - fade_start, 1)))
        fade_draw.line([(x, 0), (x, H)], fill=alpha)

    white_blend = Image.new("RGB", (LEFT_W, H), "#ffffff")
    panel = Image.composite(white_blend, panel, fade)
    return panel


def draw_tag(draw: ImageDraw.ImageDraw, x: int, y: int) -> int:
    tag_font = load_font(14, bold=True)
    tag_text = "Our Founder"
    tag_w = int(draw.textlength(tag_text, font=tag_font)) + 46
    tag_h = 34

    tag_layer = Image.new("RGBA", (tag_w, tag_h), (0, 0, 0, 0))
    tag_draw = ImageDraw.Draw(tag_layer)
    tag_draw.rounded_rectangle((0, 0, tag_w, tag_h), radius=17, fill=(99, 102, 241, 38))
    tag_draw.ellipse((12, 13, 22, 23), fill="#4f46e5")
    tag_draw.text((28, 8), tag_text, font=tag_font, fill="#4f46e5")

    return tag_layer, tag_w


def main() -> None:
    canvas = Image.new("RGB", (W, H), "#ffffff")
    canvas.paste(build_photo_panel(), (0, 0))

    draw = ImageDraw.Draw(canvas)

    # Right-edge accent stripe.
    stripe = Image.new("RGB", (6, H))
    stripe_draw = ImageDraw.Draw(stripe)
    for y in range(H):
        t = y / max(H - 1, 1)
        color = (
            int(99 + (236 - 99) * t),
            int(102 + (72 - 102) * t),
            int(241 + (153 - 241) * t),
        )
        stripe_draw.line([(0, y), (6, y)], fill=color)
    canvas.paste(stripe, (W - 6, 0))

    # Text block — safe from LinkedIn profile-photo overlap (center-right).
    x = LEFT_W + 48
    y = 58

    tag_layer, tag_w = draw_tag(draw, x, y)
    canvas.paste(tag_layer, (x, y), tag_layer)
    y += 52

    title_font = load_font(48, bold=True)
    draw.text((x, y), "Meet ", font=title_font, fill="#0f172a")
    meet_w = draw.textlength("Meet ", font=title_font)
    draw_gradient_text(draw, (x + int(meet_w), y), "Our Founder", title_font)
    y += 58

    bold_font = load_font(21, bold=True)
    sub_font = load_font(21, bold=False)
    draw.text((x, y), "Faizan Khan", font=bold_font, fill="#6366f1")
    name_w = draw.textlength("Faizan Khan", font=bold_font)
    draw.text((x + name_w, y), ", Founder & CEO, AppsDeddy", font=sub_font, fill="#475569")
    y += 34

    meta_font = load_font(13, bold=True)
    draw.text((x, y), "Engineering Smart Solutions · Indianapolis, USA", font=meta_font, fill="#64748b")

    OUT.parent.mkdir(parents=True, exist_ok=True)
    canvas.save(OUT, "PNG", optimize=True)
    print(f"Saved {OUT} ({W}x{H})")


if __name__ == "__main__":
    main()
