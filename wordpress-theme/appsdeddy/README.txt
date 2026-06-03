AppsDeddy WordPress Theme — Install (Part B)
==========================================

1. WordPress must be installed in: public_html/blog/
   (NOT in public_html root)

2. Upload this entire "appsdeddy" folder to:
   public_html/blog/wp-content/themes/appsdeddy/

3. In WordPress admin:
   Appearance → Themes → Activate "AppsDeddy"

4. Settings → Reading:
   - "Your homepage displays" → Your latest posts (for /blog/)
   OR set a static "Posts page" if you use a custom front page in WP

5. Settings → Permalinks → Post name → Save

6. Add Blog link in main site nav (includes/header.php):
   <a href="<?= SITE_BASE ?>blog/">Blog</a>

Folder on server should look like:
  public_html/includes/header.php
  public_html/css/style.css
  public_html/blog/wp-content/themes/appsdeddy/header.php  (this theme)

The theme header.php loads ../../includes/header.php automatically.
