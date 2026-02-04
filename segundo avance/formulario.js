const loginTab = document.getElementById("loginTab");
const registerTab = document.getElementById("registerTab");
const forms = document.querySelector(".auth-forms");
const indicator = document.querySelector(".tab-indicator");

loginTab.onclick = () => {
  forms.style.transform = "translateX(0)";
  indicator.style.transform = "translateX(0)";
  loginTab.classList.add("active");
  registerTab.classList.remove("active");
};

registerTab.onclick = () => {
  forms.style.transform = "translateX(-50%)";
  indicator.style.transform = "translateX(100%)";
  registerTab.classList.add("active");
  loginTab.classList.remove("active");
};

// 🚀 LOGIN
document.getElementById("loginForm").addEventListener("submit", e => {
  e.preventDefault(); // ❌ no recargar
  window.location.href = "mercado.html?welcome=1";
});

// 🚀 REGISTRO
document.getElementById("registerForm").addEventListener("submit", e => {
  e.preventDefault();
  window.location.href = "mercado.html?welcome=1";
});
