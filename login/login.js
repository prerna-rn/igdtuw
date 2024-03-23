const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const logInButton = document.getElementById('logIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
	// window.location.href = "/dashboard/index.html";
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
	// window.location.href = "/dashboard/index.html";
});

logInButton.addEventListener('click', function(event) {
	event.preventDefault();
	container.classList.remove("right-panel-active");
	if(window.validationPassed) {
		// Redirect to the dashboard
		window.location.href = "../dashboard/index.html";

	}
});