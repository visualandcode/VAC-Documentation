<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ws-frameworks v1 :: Documentation :: </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Description">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/assets/css/vue.css" title="vue" >
  <link rel="stylesheet" href="/assets/css/dark.css" title="dark" disabled>
  <link rel="stylesheet" href="/assets/css/buble.css" title="buble" disabled>
  <link rel="stylesheet" href="/assets/css/pure.css" title="pure" disabled>
  <style>
    nav.app-nav li ul {
      min-width: 100px;
    }
  </style>
</head>
<body>
  <div id="app"></div>
  <script>
    window.$docsify = {
      name: 'Samplepage',
      search: 'auto', // default
      search: {
        noData: {
          '/': 'No results!'
        },
        paths: 'auto',
        placeholder: {
          '/': 'Search'
        }
      },
      //repo: '',
      alias: {
      '/.*/_sidebar.md': '/_sidebar.md'
      } , 
      auto2top: true,
      executeScript: true,
      loadSidebar: true,
      loadNavbar: '../_navbar.md', 
      mergeNavbar: true,
      maxLevel: 4,
      notFoundPage: true,
      subMaxLevel: 2,
      coverpage: true,
      plugins: [
        function (hook, vm) {
          hook.beforeEach(function (html) {
            url = 'http://kct.libdocs/md-editor/?modules/v1/' + vm.route.file

            var editHtml = '[:memo: Edit Document](' + url + ')\n'

            return editHtml
              + html
              + '\n\n----\n\n'
              + '<a href="http://kct.co.id" target="_blank" style="color: inherit; font-weight: normal; text-decoration: none;">Powered by PT Kreasndo Cipta Teknologi</a>'
          })
        }
      ]
    }
  </script>
  <script src="/assets/js/docsify.min.js"></script>
  <script src="/assets/js/search.min.js"></script>
  <script src="/assets/js/php.min.js"></script>
  <script src="/assets/js/python.min.js"></script>
  

</body>
</html>
