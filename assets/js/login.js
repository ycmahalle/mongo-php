window.onload = () => {
  //   alert();
  var baseLocation = window.location.origin + "/ycc/";
  console.log(baseLocation);
  const login = document.getElementById("login");
  const register = document.getElementById("Register");
  const openRegForm = document.getElementById("openRegister");
  const openLoginForm = document.getElementById("openLoginForm");

  const openRegFormFunc = () => {
    login.style.cssText = "transform:scale(0)";
    register.style.cssText = "top:10vh";
  };
  const openLoginFormFunc = () => {
    login.style.cssText = "transform:scale(1)";
    register.style.cssText = "top:-190vh";
  };
  openRegFormFunc();
  openRegForm.onclick = openRegFormFunc;
  openLoginForm.onclick = openLoginFormFunc;

  // ================================================
  $("#registerVendor").on("submit", (e) => {
    let city = $("#city").val();
    let location = $("#location").val();
    let vendorName = $("#vendorName").val();
    let contact = $("#contact").val();
    let password = $("#password").val();
    e.preventDefault();
    $.ajax({
      method: "post",
      url: baseLocation + "controllers/vendorController.php",
      data: {
        page: "createVendor",
        city: city,
        location: location,
        vendorName: vendorName,
        contact: contact,
        password: password,
      },
      success: (res) => {
        console.log("Yash");
        console.log(res);
      },
      error: (err) => {
        console.log(err);
      },
    });
  });
};
