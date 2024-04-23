// sidebar logics for hover effects
const dashboard = document.getElementById("dashboard");
const product = document.getElementById("product");
const user = document.getElementById("user");
const menu = document.getElementById("menu");
const order = document.getElementById("order");
menu.addEventListener("mouseover", () => {
  dashboard.className = "  animate__animated animate__fadeIn";
  product.className = "   animate__animated animate__fadeIn";
  user.className = "   animate__animated animate__fadeIn";
  order.className = "   animate__animated animate__fadeIn ";
});

menu.addEventListener("mouseleave", () => {
  dashboard.className = " hidden animate__animated animate__fadeOut";
  product.className = " hidden animate__animated animate__fadeOut";
  user.className = " hidden animate__animated animate__fadeOut";
  order.className = " hidden animate__animated animate__fadeOut";
});
