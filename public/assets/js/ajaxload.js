function fixedEncodeURI (str) {
    return encodeURI(str).replace(/[!'()*]/g, function(c) {
        return '%' + c.charCodeAt(0).toString(16);
    });
}
  
function ajax_reloadContent(div, url) {
    if(!document.getElementById(div)) return false;
    url=fixedEncodeURI(url);
    $("#"+div).load(url);
}
  