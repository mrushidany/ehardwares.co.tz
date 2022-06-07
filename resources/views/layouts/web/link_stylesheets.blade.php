<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>ehardwares</title>
<meta name="description" content="Ehardwares is a hardware based ecommerce site." />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Ehardwares - Hardwares ecommerce site" />
<meta property="og:url" content="PAGE_URL" />
<meta property="og:site_name" content="Ehardwares - Hardwares ecommerce site" />
<!-- For the og:image content, replace the # with a link of an image -->
<meta property="og:image" content="#" />
<meta property="og:description" content="Ehardwares - Hardwares ecommerce site" />
<meta name="robots" content="noindex, follow" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Add site Favicon -->
<link rel="icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" sizes="32x32" />
<link rel="icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" sizes="192x192" />
<link rel="apple-touch-icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" />
<meta name="msapplication-TileImage" content="{{ asset ('ecommerce/img/icon.jpeg') }}" />
<!-- Structured Data  -->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "ehardwares",
        "url": "ehardwares.co.tz"
    }
</script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/vendor/vendor.min.css') }}" />
<link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/plugins/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/style.css') }}">
