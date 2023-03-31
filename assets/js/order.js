function addcount() {
  const old = document.getElementById("count");
  let newV = parseInt(old.value) + 1;
  //   console.log(new);
  old.value = newV;
}
function lesscount() {
  const old = document.getElementById("count");
  let newV = parseInt(old.value) - 1;
  //   console.log(new);
  old.value = newV;
}
