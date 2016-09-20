/**
 * Created by admin on 2016/9/20.
 */
/* @Deprecated Function, to support early invoke only. */
function encrypt(password){
    var ret= new String("");
    var str = new String(password);
    var temp = new Array(password.length);
    for(i = 0; i< str.length; i++)
    {
        temp[i] = str.charCodeAt(i)^0xff;
        ret += String.fromCharCode(temp[i]);
    }
    return ret;
}

/* @Deprecated Function, to support early invoke only. */
function base64(input) {
    var keyStr = "ABCDEFGHIJKLMNOP" +
        "QRSTUVWXYZabcdef" +
        "ghijklmnopqrstuv" +
        "wxyz0123456789+/" +
        "=";
    var output = "";
    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
    var i = 0;
    while (i < input.length) {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
            enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
            enc4 = 64;
        }
        output = output + keyStr.charAt(enc1) + keyStr.charAt(enc2) + keyStr.charAt(enc3) + keyStr.charAt(enc4);
    }
    return output;
}

/* @Deprecated Function, to support early invoke only. */
function setCookie(name,value) {
    i_p_f_setCookie(name,value,60*60*24*365);
}

/* @Deprecated Function, to support early invoke only. */
function getCookie(Name) {
    return imc_portal_function_getCookie(Name);
}

/* @Deprecated Function, to support early invoke only. */
function checkUserName(userName) {
    return true;
}

/*  */
function imc_portal_function_encrypt(password){
    var ret= new String("");
    var str = new String(password);
    var temp = new Array(password.length);
    for(i = 0; i< str.length; i++)
    {
        temp[i] = str.charCodeAt(i)^0xff;
        ret += String.fromCharCode(temp[i]);
    }
    return ret;
}

/*  */
function imc_portal_function_base64(input) {
    var keyStr = "ABCDEFGHIJKLMNOP" +
        "QRSTUVWXYZabcdef" +
        "ghijklmnopqrstuv" +
        "wxyz0123456789+/" +
        "=";
    var output = "";
    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
    var i = 0;
    while (i < input.length) {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
            enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
            enc4 = 64;
        }
        output = output + keyStr.charAt(enc1) + keyStr.charAt(enc2) + keyStr.charAt(enc3) + keyStr.charAt(enc4);
    }
    return output;
}

/* set cookie */
function i_p_f_setCookie(name,value,expiresSecond) {
    if (name!=null && value!=null) {
        var v_cookie_str = name + "=" + escape(value)
        if (expiresSecond != null) {
            var expires = new Date();
            expires.setTime((new Date()).getTime() + 1000*expiresSecond);
            v_cookie_str = v_cookie_str + "; expires=" + expires.toGMTString();
        }

        document.cookie = v_cookie_str + "; Path=/portal/";
    }
}

/* set cookie */
function i_p_f_setCookieWithSessionScope(name,value) {
    i_p_f_setCookie(name,value);
}

/* set cookie */
function imc_portal_function_setCookie(name,value) {
    i_p_f_setCookie(name,value,60*60*24*365);
}

/* remove cookie */
function i_p_f_removeCookie(name) {
    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() - 1000*60*60*24*365); // earlier than now
    document.cookie = name + "=; expires=" + expires.toGMTString();
}

/* get cookie */
function imc_portal_function_getCookie(Name) {
    var search = Name + "=";
    if(document.cookie.length > 0) {
        offset = document.cookie.indexOf(search);
        if(offset != -1) {
            offset += search.length;
            end = document.cookie.indexOf(";", offset);
            if(end == -1) end = document.cookie.length;
            return unescape(document.cookie.substring(offset, end));
        }
        else return "";
    }
    else return "";
}

/**
 * delete the space of one string from left and right
 */
String.prototype.trim=function()
{
    return this.replace(/(^\s*)|(\s*$)/g, "");
    //some codes in the internet has no '|', but in this current testing env., must have the '|'
}
/**
 * delete the space of one string from left
 */
String.prototype.ltrim=function()
{
    return this.replace(/(^\s*)/g,"");
}
/**
 * delete the space of one string from right
 */
String.prototype.rtrim=function()
{
    return this.replace(/(\s*$)/g,"");
}

/* check username. attribute: userName = "name" + "domain" */
function imc_portal_function_checkUserName(userName,promptArray){
    var userNameLeft = userName.ltrim(); //the userName before @
    var userNameRight = "";

    var re=/^[\s]*$/;
    if(userName.match(re)) {
        alert(promptArray[0]); //account name can not be blank
        return false;
    }

    // User name only have one character '@' at most and the character can not at the beginning of the user name.
    re = /^[\ ]*[\@]$/;
    if(-1 != userName.indexOf('@') &&
        (userName.indexOf('@') != userName.lastIndexOf('@')
        || userName.substring(0, userName.indexOf('@') + 1).match(re))) {
        alert(promptArray[1]);
        return false;
    } //make sure the User name only have one character '@' at most

    if(userName.indexOf('@') !=-1){
        userNameLeft = userName.substring(0, userName.indexOf('@')).trim(); //get the account name before @
        userNameRight = userName.substring(userName.indexOf('@')+1, userName.length).trim(); //get the domain name after @
    }

    //re = /^[\ ]*([\w\-\_\@\.]+[\ ]?[\w\-\_\@\.]*)*[\w\-\_\@\.]*[\ ]*$/;
    //illegal characters(user name, not include the '@' and domain name): #+/?%&=*'@\"[]()<>`	, and please notice that the last char is TAB.
    re =/^[^\x23\x2B\x2F\x3F\x25\x26\x3D\x2A\x27\x40\x5C\x22\x5B\x5D\x28\x29\x3C\x3E\x60\x09]+$/;
    var regexRight =  /^[\w\-\_\.]+$/;
    if(!re.test(userNameLeft)||userNameLeft.indexOf("  ")!=-1||(userNameRight != null && userNameRight.length>0&& !regexRight.test(userNameRight))){
        alert(promptArray[2]);
        return false;
    }

    return true;
}

/*  check user password  */
function imc_portal_function_checkUserPwd(userPwd, errorInfo) {
    return i_p_f_checkValNotNull(userPwd, errorInfo);
}

/*  value is not blank?  */
function i_p_f_checkValNotBlank(val,errorInfo){
    var re=/^[\s]*$/;
    if(val == null || val.match(re)) {
        if (errorInfo != null) {
            alert(errorInfo);
        }
        return false;
    } else {
        return true;
    }
}

/*  value is not null?  */
function i_p_f_checkValNotNull(val,errorInfo){
    if (val == null || val == '') {
        if (errorInfo != null) {
            alert(errorInfo);
        }
        return false;
    } else {
        return true;
    }
}

/*  check user name validity  */
function i_p_f_checkUserNameValidity(userName,errorInfo){
    var re =/^[^\x23\x2B\x2F\x3F\x25\x26\x3D\x2A\x27\x40\x5C\x22\x5B\x5D\x28\x29\x3C\x3E\x60\x09]+$/;
    if (!re.test(userName)||userName.indexOf("  ")!=-1) {
        if (errorInfo != null) {
            alert(errorInfo);
        }
        return false;
    } else {
        return true;
    }
}

/*  common function  */
function i_p_f_getParameter(name)
{
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp( regexS );
    var results = regex.exec( window.location.href );
    if( results == null ) {
        return null;
    } else {
        return results[1];
    }
}

function f_addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload!="function") {
        window.onload = func;
    } else {
        window.onload = function() {
            oldonload();
            func();
        }
    }
}

/*  common function  */
function i_p_f_getUrlFullParameters(url)
{
    var v_index = url.indexOf("?");
    if (v_index > -1) { //
        return url.substring(v_index+1);
    } else {
        return null;
    }
}

/*  ifBrowserAllowPopWindow  */
function i_p_f_ifBrowserAllowPopWindow() {
    var testWin = window.open('','testWin','height=1px,width=1px');
    if(testWin!=null && !testWin.closed){
        testWin.close();
        return true;
    }else{
        return false;
    }
}

function i_p_f_pageLoading(v_type) {
    if (v_type == null) {
        alert("error.");
        return ;
    } else if (v_type == 'init') {
        $("body").append("<div id='id_loading' style='display: none;'><div id='id_loading_filter' class='loading_filter'></div></div>");
    } else if (v_type == 'start') {
        $("select").hide();
        $("#id_loading").show();
    } else if (v_type == 'complete') {
        $("#id_loading").hide();
        $("select").show();
    } else {
        alert("error.");
        return ;
    }
}

var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64DecodeChars = new Array(
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
    52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
    -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
    15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
    -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
    41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);

function i_p_f_base64Encode(str) {
    var out, i, len;
    var c1, c2, c3;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
        c1 = str.charCodeAt(i++) & 0xff;
        if(i == len)
        {
            out += base64EncodeChars.charAt(c1 >> 2);
            out += base64EncodeChars.charAt((c1 & 0x3) << 4);
            out += "==";
            break;
        }
        c2 = str.charCodeAt(i++);
        if(i == len)
        {
            out += base64EncodeChars.charAt(c1 >> 2);
            out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
            out += base64EncodeChars.charAt((c2 & 0xF) << 2);
            out += "=";
            break;
        }
        c3 = str.charCodeAt(i++);
        out += base64EncodeChars.charAt(c1 >> 2);
        out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
        out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
        out += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return out;
}

/*    */
function i_p_f_base64Decode(str) {
    var c1, c2, c3, c4;
    var i, len, out;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
        /* c1 */
        do {
            c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
        } while(i < len && c1 == -1);
        if(c1 == -1)
            break;

        /* c2 */
        do {
            c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
        } while(i < len && c2 == -1);
        if(c2 == -1)
            break;

        out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));

        /* c3 */
        do {
            c3 = str.charCodeAt(i++) & 0xff;
            if(c3 == 61)
                return out;
            c3 = base64DecodeChars[c3];
        } while(i < len && c3 == -1);
        if(c3 == -1)
            break;

        out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));

        /* c4 */
        do {
            c4 = str.charCodeAt(i++) & 0xff;
            if(c4 == 61)
                return out;
            c4 = base64DecodeChars[c4];
        } while(i < len && c4 == -1);
        if(c4 == -1)
            break;
        out += String.fromCharCode(((c3 & 0x03) << 6) | c4);
    }
    return out;
}

/*    */
function i_p_f_base64DecodeAndUrlDecode(str) {
    return decodeURIComponent(i_p_f_base64Decode(str));
}
