function toggleForm(nameNextForm) {
	var btnReg = document.getElementById("btn-activate-reg-form");
	var btnLogin = document.getElementById("btn-activate-login-form");
	
	var formReg = document.getElementById("reg-form");
	var formLogin = document.getElementById("login-form");

	if (nameNextForm == "reg") {

		if (!btnReg.classList.contains("active"))
		{
			btnReg.classList.toggle("active");
			btnLogin.classList.toggle("active");

			formReg.classList.toggle("enabled-form");
			formLogin.classList.toggle("enabled-form");
		}
	}
	else if (nameNextForm == "login") {
		
		if (!btnLogin.classList.contains("active"))
		{
			btnReg.classList.toggle("active");
			btnLogin.classList.toggle("active");
			
			formReg.classList.toggle("enabled-form");
			formLogin.classList.toggle("enabled-form");
		}
	}
}