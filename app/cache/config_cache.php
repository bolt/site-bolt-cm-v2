<?php /* bolt */ die(); ?>json:{"general":{"database":{"prefix":"bolt_","driver":"sqlite","databasename":"bolt"},"sitename":"A sample site","homepage":"page\/1","homepage_template":"index.twig","locale":"en_GB","recordsperpage":10,"recordsperdashboardwidget":5,"debug":true,"debug_show_loggedoff":false,"debug_error_level":6135,"debug_enable_whoops":true,"debug_permission_audit_mode":false,"frontend_permission_checks":false,"strict_variables":false,"theme":"base-2014","debug_compressjs":true,"debug_compresscss":true,"listing_template":"listing.twig","listing_records":6,"listing_sort":"datepublish DESC","caching":{"config":true,"rendering":false,"templates":true,"request":false,"duration":10,"authenticated":false},"wysiwyg":{"images":true,"tables":true,"fontcolor":false,"align":false,"subsuper":false,"embed":true,"anchor":false,"ck":{"allowedContent":true,"autoParagraph":true,"contentsCss":["\/app\/view\/lib\/ckeditor\/contents.css","\/app\/view\/css\/ckeditor.css"],"filebrowserWindowWidth":640,"filebrowserWindowHeight":480},"filebrowser":{"browseUrl":"\/async\/filebrowser\/","imageBrowseUrl":"\/bolt\/files\/files"}},"canonical":"boltsite.anke.twokings.eu","developer_notices":false,"cookies_use_remoteaddr":true,"cookies_use_browseragent":false,"cookies_use_httphost":true,"cookies_https_only":false,"cookies_lifetime":1209600,"thumbnails":{"default_thumbnail":[160,120],"default_image":[1000,750],"quality":80,"cropping":"crop","notfound_image":"view\/img\/default_notfound.png","error_image":"view\/img\/default_error.png","save_files":false,"allow_upscale":false},"accept_file_types":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"hash_strength":10,"branding":{"name":"Bolt","path":"\/bolt","provided_by":[]},"maintenance_mode":false,"payoff":"The amazing payoff goes here","maintenance_template":"maintenance_default.twig","cron_hour":3,"notfound":"page\/not-found","record_template":"record.twig","search_results_template":"listing.twig","search_results_records":10,"add_jquery":false,"changelog":{"enabled":false},"cookies_domain":".boltsite.anke.twokings.eu","session_use_storage_handler":true,"grunt":{"livereload":false,"livereloadport":35729}},"taxonomy":{"tags":{"slug":"tags","singular_slug":"tag","behaves_like":"tags","name":"Tags","singular_name":"Tag","has_sortorder":false,"tagcloud":true},"chapters":{"slug":"chapters","singular_slug":"chapter","behaves_like":"grouping","options":{"main":"The main chapter","meta":"Meta Chapter","other":"The other stuff"},"has_sortorder":true,"name":"Chapters","singular_name":"Chapter"},"categories":{"name":"Categories","slug":"categories","singular_name":"Category","singular_slug":"category","behaves_like":"categories","multiple":true,"options":{"news":"news","events":"events","movies":"movies","music":"music","books":"books","life":"life","love":"love","fun":"fun"},"has_sortorder":false}},"menu":{"main":[{"label":"Home","title":"This is the first menu item.","path":"homepage","class":"first"},{"label":"Second item","path":"entry\/1","submenu":[{"label":"Sub 1","path":"entry\/2"},{"label":"Sub 2","class":"menu-item-class","path":"entry\/3"},{"label":"Sub 3","path":"entry\/4"},{"label":"Sub 4","class":"sub-class","path":"page\/3"}]},{"label":"All pages","path":"pages\/"},{"label":"The Bolt site","link":"http:\/\/bolt.cm","class":"last"}]},"routing":{"homepage":{"path":"\/","defaults":{"_controller":"Bolt\\Controllers\\Frontend::homepage"}},"search":{"path":"\/search","defaults":{"_controller":"Bolt\\Controllers\\Frontend::search"}},"preview":{"path":"\/preview\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::preview"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"contentlink":{"path":"\/{contenttypeslug}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"taxonomylink":{"path":"\/{taxonomytype}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::taxonomy"},"requirements":{"taxonomytype":"Bolt\\Controllers\\Routing::getAnyTaxonomyTypeRequirement"}},"contentlisting":{"path":"\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::listing"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getPluralContentTypeRequirement"}}},"permissions":{"roles":{"editor":{"description":"This user can edit some content.","label":"Editor"},"chief-editor":{"description":"This user can edit any content in the system.","label":"Chief Editor"},"admin":{"description":"User-level administrator.","label":"Administrator"},"developer":{"description":"Developer access. Only required to change system-level settings.","label":"Developer"},"guest":{"description":"This user can log on, but is not allowed to edit any content.","label":"Guest Editor"}},"global":{"about":["editor","admin","developer"],"activitylog":["admin","developer","chief-editor"],"clearcache":["admin","developer"],"contentaction":["editor","admin","developer"],"dashboard":["everyone"],"dbcheck":["admin","developer"],"dbupdate":["admin","developer"],"dbupdate_result":["admin","developer"],"extensions":["developer"],"fileedit":["admin","developer"],"files:config":["developer"],"files:theme":["developer"],"files:uploads":["admin","developer","chief-editor"],"files":["editor","admin","developer"],"prefill":["developer"],"profile":["everyone"],"settings":["admin","developer","everyone"],"translation":["developer"],"useraction":["admin","developer"],"useredit":["admin","developer"],"users":["admin","developer"],"maintenance-mode":["everyone"],"omnisearch":["everyone"],"login":["anonymous"],"postLogin":["anonymous"],"logout":["everyone"]},"contenttype-all":{"edit":["developer","admin","chief-editor"],"create":["developer","admin","chief-editor"],"publish":["developer","admin","chief-editor"],"depublish":["developer","admin","chief-editor"],"delete":["developer","admin"],"change-ownership":["developer","admin"]},"contenttype-default":{"edit":["editor"],"create":["editor"],"change-ownership":["owner"],"view":["anonymous"],"frontend":["anonymous"]},"contenttypes":null},"extensions":[],"theme":[],"contenttypes":{"entries":{"name":"Entries","singular_name":"Entry","fields":{"title":{"type":"text","class":"large","group":"basic"},"slug":{"type":"slug","uses":["title"],"group":"basic"},"image":{"type":"image","group":"media","separator":true,"extensions":["gif","jpg","jpeg","png"]},"teaser":{"type":"html","height":"150px","group":"basic"},"video":{"type":"video","group":"media"},"body":{"type":"html","height":"300px","group":"basic"}},"relations":{"pages":{"multiple":false,"order":"title","label":"Select a page"}},"taxonomy":["categories","tags"],"record_template":"entry.twig","listing_template":"listing.twig","listing_records":10,"default_status":"publish","sort":"datepublish DESC","recordsperpage":10,"groups":{"0":"basic","2":"media"},"slug":"entries","singular_slug":"entry","show_on_dashboard":true,"show_in_menu":true},"pages":{"name":"Pages","singular_name":"Page","fields":{"title":{"type":"text","class":"large","group":false},"slug":{"type":"slug","uses":["title"],"group":false},"image":{"type":"image","extensions":["gif","jpg","jpeg","png"],"group":false},"teaser":{"type":"html","height":"150px","group":false},"body":{"type":"html","height":"300px","group":false},"template":{"type":"templateselect","filter":"*.twig","group":false}},"taxonomy":["chapters"],"recordsperpage":100,"slug":"pages","singular_slug":"page","show_on_dashboard":true,"show_in_menu":true,"sort":"","default_status":"draft"},"kitchensink":{"name":"Kitchensinks","singular_name":"Kitchensink","fields":{"title":{"type":"text","class":"large","required":true,"pattern":"*{2,255}","group":false},"slug":{"type":"slug","uses":["selectfield","title"],"group":false},"video":{"type":"video","group":false},"html":{"type":"html","height":"150px","group":false},"geolocation":{"type":"geolocation","group":false},"image":{"type":"image","attrib":"title","extensions":["gif","jpg","png"],"group":false},"imagelist":{"type":"imagelist","extensions":["gif","jpg","jpeg","png"],"group":false},"file":{"type":"file","extensions":["doc","docx","txt","md","pdf","xls","xlsx","ppt","pptx"],"group":false},"filelist":{"type":"filelist","extensions":["doc","docx","txt","md","pdf","xls","xlsx","ppt","pptx"],"group":false},"checkbox":{"type":"checkbox","label":"This is a checkbox","group":false},"markdown":{"prefix":"<em>This short text comes before the actual field.<\/em>","type":"markdown","postfix":"<hr>","group":false},"textarea":{"type":"textarea","group":false},"template":{"type":"templateselect","filter":"*.twig","group":false},"datetime":{"type":"datetime","default":"2000-01-01","group":false},"date":{"type":"date","default":"first day of last month","group":false},"integerfield":{"type":"integer","index":true,"group":false},"floatfield":{"type":"float","group":false},"selectfield":{"type":"select","values":["none","foo","bar"],"group":false},"multiselect":{"type":"select","values":["A-tuin","Donatello","Rafael","Leonardo","Michelangelo","Koopa","Squirtle"],"multiple":true,"postfix":"Select your favourite turtle(s).","group":false},"selectentry":{"type":"select","values":"entries\/id,title","postfix":"Select an entry","group":false}},"relations":{"entries":{"multiple":false,"label":"Choose an entry","order":"-id","format":"{{ item.title|escape }} <span>(\u2116 {{ item.id }})<\/span>"},"pages":{"multiple":true,"order":"title","label":"Select zero or more pages"}},"taxonomy":["categories","tags","chapters"],"show_on_dashboard":true,"default_status":"publish","searchable":false,"icon":"cubes","icon_singular":"cube","slug":"kitchensink","singular_slug":"kitchensink","show_in_menu":true,"sort":""}},"version":"2.0.0 almost beta"}