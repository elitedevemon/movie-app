<footer id="site-footer" role="contentinfo" itemscope="" itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="copyrights">
      <center>
        <a data-wpel-link="internal" href="about-us/index.htm">About Us</a> |
        <a data-wpel-link="internal" href="report-broken-links/index.htm"> Report Broken Links</a> |
        <a data-wpel-link="internal" href="request-us/index.htm"> Request Us</a> |
        <a data-wpel-link="internal" href="dmca/index.htm">DMCA</a> |
        <a data-wpel-link="internal" href="contact-us/index.htm">Contact Us</a> |
        <a data-wpel-link="internal" href="site-disclaimer/index.htm">Site Disclaimer</a>
        <br>
        <div class="copyrights">
          <p>
            Copyright © 2025 - <a href="index.htm"> MoviesMod – MoviesFlix | TheMoviesverse |
              TheMoviesMod | TopMovies
              | ModList.in </a> | All Rights Reserved.
          </p>
        </div>
      </center>

    </div>
  </div><!--.container-->
</footer><!-- #site-footer-->
<script>
  function coolTagCloudToggle(element) {
    var parent = element.closest('.cool-tag-cloud');
    parent.querySelector('.cool-tag-cloud-inner').classList.toggle('cool-tag-cloud-active');
    parent.querySelector('.cool-tag-cloud-load-more').classList.toggle('cool-tag-cloud-active');
  }
</script>
<div class="mtsnb mtsnb-shown mtsnb-top mtsnb-absolute" id="mtsnb-5562" data-mtsnb-id="5562"
  style="background-color:#d35151;color:#ffffff;">
  <style type="text/css">
    .mtsnb {
      position: absolute;
      -webkit-box-shadow: 0 3px 4px rgba(0, 0, 0, 0.05);
      box-shadow: 0 3px 4px rgba(0, 0, 0, 0.05);
    }

    .mtsnb .mtsnb-container {
      width: 100%;
      font-size: 15px;
      padding: 15px 34px 5px 34px;
    }

    .mtsnb a {
      color: #000000;
    }

    .mtsnb .mtsnb-button {
      background-color: #000000;
    }
  </style>
  <div class="mtsnb-container-outer">
    <div class="mtsnb-container mtsnb-clearfix">
      <marquee class="mtsnb-button-type mtsnb-content" behavior="scroll" direction="rtl"
        onmouseover="this.stop()" onmouseout="this.start()" touchover="this.stop()"
        touchout="this.start()">
        @php
          $newses = \App\Models\News::orderByDesc('id')->limit(5)->whereStatus(true)->get();
        @endphp
        @foreach ($newses as $news)
          <span class="mtsnb-text">
            <b class="bg-primary rounded-circle p-2">{{ $news->news_category }}:</b> {{ $news->news }}
          </span>
        @endforeach
        {{-- <a class="mtsnb-button" href="announcements/index.htm">Read More</a> --}}
      </marquee>
    </div>
    <a class="mtsnb-hide" href="#" style="background-color:#d35151;color:#ffffff;"><span>+</span></a>
  </div>
</div>
<script type="text/javascript" src="{{ asset('assets/wp-admin/js/editor.min.js') }}" id="editor-js"></script>
<script type="text/javascript" id="editor-js-after">
  /* <![CDATA[ */
  window.wp.oldEditor = window.wp.editor;
  /* ]]> */
</script>
<script type="text/javascript" id="quicktags-js-extra">
  /* <![CDATA[ */
  var quicktagsL10n = {
    "closeAllOpenTags": "Close all open tags",
    "closeTags": "close tags",
    "enterURL": "Enter the URL",
    "enterImageURL": "Enter the URL of the image",
    "enterImageDescription": "Enter a description of the image",
    "textdirection": "text direction",
    "toggleTextdirection": "Toggle Editor Text Direction",
    "dfw": "Distraction-free writing mode",
    "strong": "Bold",
    "strongClose": "Close bold tag",
    "em": "Italic",
    "emClose": "Close italic tag",
    "link": "Insert link",
    "blockquote": "Blockquote",
    "blockquoteClose": "Close blockquote tag",
    "del": "Deleted text (strikethrough)",
    "delClose": "Close deleted text tag",
    "ins": "Inserted text",
    "insClose": "Close inserted text tag",
    "image": "Insert image",
    "ul": "Bulleted list",
    "ulClose": "Close bulleted list tag",
    "ol": "Numbered list",
    "olClose": "Close numbered list tag",
    "li": "List item",
    "liClose": "Close list item tag",
    "code": "Code",
    "codeClose": "Close code tag",
    "more": "Insert Read More tag"
  };
  /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/quicktags.min.js') }}" id="quicktags-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/hoverIntent.min.js') }}"
  id="hoverIntent-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/dist/dom-ready.min.js') }}"
  id="wp-dom-ready-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/dist/hooks.min.js') }}" id="wp-hooks-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/dist/i18n.min.js') }}" id="wp-i18n-js">
</script>
<script type="text/javascript" id="wp-i18n-js-after">
  /* <![CDATA[ */
  wp.i18n.setLocaleData({
    'text direction\u0004ltr': ['ltr']
  });
  wp.i18n.setLocaleData({
    'text direction\u0004ltr': ['ltr']
  });
  /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/dist/a11y.min.js') }}" id="wp-a11y-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-admin/js/common.min.js') }}" id="common-js"></script>
<script type="text/javascript" id="wplink-js-extra">
  /* <![CDATA[ */
  var wpLinkL10n = {
    "title": "Insert\/edit link",
    "update": "Update",
    "save": "Add Link",
    "noTitle": "(no title)",
    "noMatchesFound": "No results found.",
    "linkSelected": "Link selected.",
    "linkInserted": "Link inserted.",
    "minInputLength": "3"
  };
  /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/wplink.min.js') }}" id="wplink-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/ui/core.min.js') }}"
  id="jquery-ui-core-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/ui/menu.min.js') }}"
  id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/jquery/ui/autocomplete.min.js') }}"
  id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" id="thickbox-js-extra">
  /* <![CDATA[ */
  var thickboxL10n = {
    "next": "Next >",
    "prev": "< Prev",
    "image": "Image",
    "of": "of",
    "close": "Close",
    "noiframes": "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
    "loadingAnimation": "\/\/\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
  };
  /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/thickbox/thickbox.js') }}"
  id="thickbox-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/underscore.min.js') }}"
  id="underscore-js"></script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/shortcode.min.js') }}" id="shortcode-js">
</script>
<script type="text/javascript" src="{{ asset('assets/wp-admin/js/media-upload.min.js') }}"
  id="media-upload-js"></script>
<script type="text/javascript" id="customscript-js-extra">
  /* <![CDATA[ */
  var mts_customscript = {
    "responsive": "1",
    "nav_menu": "primary"
  };
  /* ]]> */
</script>
<script type="text/javascript" async="async"
  src="{{ asset('assets/wp-content/themes/mts_sociallyviral1/js/customscript.js') }}" id="customscript-js">
</script>
<script type="text/javascript" async="async"
  src="{{ asset('assets/wp-content/themes/mts_sociallyviral1/js/jquery.magnific-popup.min.js') }}"
  id="magnificPopup-js"></script>
<script type="text/javascript" src="{{ asset('assets/js/e-202502.js') }}" id="jetpack-stats-js"
  data-wp-strategy="defer"></script>
<script type="text/javascript" id="jetpack-stats-js-after">
  /* <![CDATA[ */
  _stq = window._stq || [];
  _stq.push(["view", JSON.parse(
    "{\"v\":\"ext\",\"blog\":\"237329353\",\"post\":\"0\",\"tz\":\"5.5\",\"srv\":\"moviesmod.com.pl\",\"j\":\"1:14.0\"}"
  )]);
  _stq.push(["clickTrackerInit", "237329353", "0"]);
  /* ]]> */
</script>
<script type="text/javascript"
  src="{{ asset('assets/wp-content/plugins/shortcode-imdb/includes/js/collapse.js') }}"
  id="shimdb_collapse_js-js"></script>
<script type="text/javascript"
  src="{{ asset('assets/wp-content/plugins/shortcode-imdb/includes/js/scroll-down.js') }}"
  id="shimdb_scroll_js-js"></script>
<script type="text/javascript"
  src="{{ asset('assets/wp-content/plugins/shortcode-imdb/includes/js/popups.js') }}"
  id="shimdb_popups_js-js"></script>
<script type="text/javascript"
  src="{{ asset('assets/wp-content/plugins/shortcode-imdb/includes/js/width.js') }}" id="shimdb_width_js-js">
</script>
<script type="text/javascript">
  window.wp = window.wp || {};
  window.wp.editor = window.wp.editor || {};
  window.wp.editor.getDefaultSettings = function() {
    return {
      tinymce: {
        theme: "modern",
        skin: "lightgray",
        language: "en",
        formats: {
          alignleft: [{
            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
            styles: {
              textAlign: "left"
            }
          }, {
            selector: "img,table,dl.wp-caption",
            classes: "alignleft"
          }],
          aligncenter: [{
            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
            styles: {
              textAlign: "center"
            }
          }, {
            selector: "img,table,dl.wp-caption",
            classes: "aligncenter"
          }],
          alignright: [{
            selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li",
            styles: {
              textAlign: "right"
            }
          }, {
            selector: "img,table,dl.wp-caption",
            classes: "alignright"
          }],
          strikethrough: {
            inline: "del"
          }
        },
        relative_urls: false,
        remove_script_host: false,
        convert_urls: false,
        browser_spellcheck: true,
        fix_list_elements: true,
        entities: "38,amp,60,lt,62,gt",
        entity_encoding: "raw",
        keep_styles: false,
        cache_suffix: "wp-mce-49110-20201110",
        resize: "vertical",
        menubar: false,
        branding: false,
        preview_styles: "font-family font-size font-weight font-style text-decoration text-transform",
        end_container_on_empty_block: true,
        wpeditimage_html5_captions: true,
        wp_lang_attr: "en-US",
        wp_shortcut_labels: {
          "Heading 1": "access1",
          "Heading 2": "access2",
          "Heading 3": "access3",
          "Heading 4": "access4",
          "Heading 5": "access5",
          "Heading 6": "access6",
          "Paragraph": "access7",
          "Blockquote": "accessQ",
          "Underline": "metaU",
          "Strikethrough": "accessD",
          "Bold": "metaB",
          "Italic": "metaI",
          "Code": "accessX",
          "Align center": "accessC",
          "Align right": "accessR",
          "Align left": "accessL",
          "Justify": "accessJ",
          "Cut": "metaX",
          "Copy": "metaC",
          "Paste": "metaV",
          "Select all": "metaA",
          "Undo": "metaZ",
          "Redo": "metaY",
          "Bullet list": "accessU",
          "Numbered list": "accessO",
          "Insert\/edit image": "accessM",
          "Insert\/edit link": "metaK",
          "Remove link": "accessS",
          "Toolbar Toggle": "accessZ",
          "Insert Read More tag": "accessT",
          "Insert Page Break tag": "accessP",
          "Distraction-free writing mode": "accessW",
          "Add Media": "accessM",
          "Keyboard Shortcuts": "accessH"
        },
        content_css: "",
        toolbar1: "bold,italic,bullist,numlist,link",
        wpautop: false,
        indent: true,
        elementpath: false,
        plugins: "charmap,colorpicker,hr,lists,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wptextpattern"
      },
      quicktags: {
        buttons: 'strong,em,link,ul,ol,li,code'
      }
    };
  };

  var tinyMCEPreInit = {
    baseURL: "",
    suffix: ".min",
    mceInit: {},
    qtInit: {},
    load_ext: function(url, lang) {
      var sl = tinymce.ScriptLoader;
      sl.markDone(url + '/langs/' + lang + '.js');
      sl.markDone(url + '/langs/' + lang + '_dlg.js');
    }
  };
</script>
<script type="text/javascript" src="{{ asset('assets/wp-includes/js/tinymce/tinymce.min.js') }}"
  id="wp-tinymce-root-js"></script>
<script type="text/javascript"
  src="{{ asset('assets/wp-includes/js/tinymce/plugins/compat3x/plugin.min.js') }}" id="wp-tinymce-js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
