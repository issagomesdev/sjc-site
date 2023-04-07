(function () {
    var form = document.getElementById('signin'),
        logNode = form.querySelector('.log'),
        input = form.querySelector('input'),
        path = (new URL(document.location)).searchParams.get('path') || '/',
        baseUrl = 'https://%s.getalma.com',
        goUrl = `${baseUrl}${path}`,
        testUrl = `${baseUrl}/ui/alma/base/images/alma.png`,
        domainCookie = document.cookie.split('; ').find(c => c.startsWith('domain=')),
        fromCookie = domainCookie ? domainCookie.split('=')[1] : null;

    function log(msg, err) {
        logNode.textContent = msg || '';
        logNode.classList.toggle('error', !!err);
    }

    function check(domain) {
        return new Promise(resolve => {
            var img = new Image();
            img.onload = () => resolve(true);
            img.onerror = () => resolve(false);
            img.src = testUrl.replace('%s', domain);
        });
    }

    async function onSubmit() {
        var domain = input.value;
        if (await check(domain)) {
            log('redirecting…');
            document.cookie = 'domain=' + domain + '; Secure';
            document.location = goUrl.replace('%s', domain);
        } else {
            log(`Could not find ${baseUrl.replace('%s', domain)}`, true);
        }
    }

    form.addEventListener('submit', function (evt) {
        evt.preventDefault();
        onSubmit();
    });
	log();
	input.focus();
    if (fromCookie) {
        input.value = fromCookie;
		if (path.length > 1) {
        	onSubmit();
		}
    }
}());
