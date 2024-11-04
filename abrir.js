function funcaoAbrir() {
    document.getElementById("container-geral").style.display = "block";
  }
   
  function closeModal() {
    document.getElementById("container-geral").style.display = "none";
  }
  document.getElementById("btnClose").onclick = closeModal;