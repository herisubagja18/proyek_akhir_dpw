function check() {
	var count = 0;

	if (document.getElementById('a').checked == true)
		count += 20;

	if (document.getElementById('b-2').checked == true)
		count += 20;

	if (document.getElementById('b-3').checked == true)
		count += 20;

	if (document.getElementById('d-4').checked == true)
		count += 20;

	if (document.getElementById('c-5').checked == true)
		count += 20;

	alert('Nilai Anda adalah: ' + count);
}
