function jump_link (url)
{
    var url = parseInt(url)
    switch (url) {
        case 1: window.location.href='/login';break;
        case 2: window.location.href='/register';break;
        case 3: window.location.href='/';break;
    }
}