/* OUNISSI , CHEN , BAYO */ 
const threshold = .1
const options = {
root: null,
rootMargin: '0px',
threshold
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > threshold){
      entry.target.classList.remove('appear')
      observer.unobserve(entry.target)
    }
  })
}

document.documentElement.classList.add('appear-loaded')
window.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  const targets = document.querySelectorAll('.appear')
  targets.forEach(function (target) {
    observer.observe(target)
  })
})

var counter=1;
      setInterval(function(){
        document.getElementById('radio'+ counter).checked=true;
        counter++;
        if(counter>4){
          counter=1;
        }
      },5000);

function inscrire(){
  var nom=document.form.nom;
  var prenom=document.form.prenom;
  var pays=document.form.pays;
  var adresse=document.form.adresse;
  var codepostal=document.form.codepostal;
  var nbreservation=document.form.nbreservation;
  var mail=document.form.mail;
  var telephone=document.form.telephone;
  var demande=document.form.demande;

  if(nom.value==""){
    alert("Veillez remplir le champs Nom" );
    nom.style.borderColor='blue';
    nom.focus();
    return false;
  }
  else{
    nom.style.borderColor='';
  }

  if(prenom.value==""){
    alert("Veuillez remplir le champs prenom");
    prenom.style.borderColor="blue";
    prenom.focus();
    return false;
  }
  else{
    prenom.style.borderColor="";
  }

  if(pays.value==""){
    alert("Veillez remplir le champs Pays" );
    pays.style.borderColor='blue';
    pays.focus();
    return false;
  }
  else{
    pays.style.borderColor='';
  }

  if(adresse.value==""){
    alert("Veillez remplir le champs Adresse" );
    adresse.style.borderColor='blue';
    adresse.focus();
    return false;
  }
  a=adresse.value;
  var va=/[\d]+(([\s\.\-_]?)[a-zA-Z]+)+$/;
  
  if (adresse.value.match(va)){
    adresse.style.borderColor='';
  }
  else{
    alert("Veuillez vérifier le champs Adresse");
    adresse.style.borderColor='blue';
    adresse.focus();
    return false;
  }

  if(codepostal.value==""){
    alert("Veillez remplir le champs Code Postal" );
    codepostal.style.borderColor='blue';
    codepostal.focus();
    return false;
  }
  c=codepostal.value;
  var val=/^[\d]{5}([\s\.\-_]?)[a-zA-Z]+$/;

  if (codepostal.value.match(val)){
    codepostal.style.borderColor='';
  }
  else{
    alert("Veuillez vérifier le champs Code Postal");
    codepostal.style.borderColor='blue';
    codepostal.focus();
    return false;
  }
  if(nbreservation.value==""){
    alert("Veuillez choisir le nombre de réservation")
    nbreservation.style.borderColor="blue";
    nbreservation.focus();
    return false;
  }
  else{
    nbreservation.style.borderColor="";
  }

  if(mail.value==""){
    alert("Veuillez remplir le champs mail");
    mail.style.borderColor='blue';
    mail.focus();
    return false;
  }
  m=mail.value;
  var placealt=m.indexOf("@");
  var placepoint=m.indexOf(".",placealt+1);
  if ((placealt>0)&& (m.length>(placepoint+1))&&(placepoint > (placealt+1))){
    mail.style.borderColor='';
  }
  else{
    alert("Veuillez vérifier le champs mail");
    mail.style.borderColor='blue';
    mail.focus();
    return false;
  }

  if(telephone==""){
    alert("Veuillez remplir le champs telephone");
    telephone.style.borderColor='blue';
    telphone.focus();
    return false;
  }
  t=telephone.value;
  var valide=/^0[1-9]([\s\.\-_]?[\d]{2}){4}$/;

  if(telephone.value.match(valide)){
    telephone.style.borderColor='';
  }
  else{
    alert("Veuillez vérifier la champs telephone");
    telephone.style.borderColor='blue';
    telephone.focus();
    return false;
  }

  if(demande.value==""){
    alert("Veuillez remplir le champs demande");
    demande.style.borderColor='blue';
    demande.focus();
    return false;
  }
  else{
    demande.style.borderColor='';
  }
}

function verifier(){
  var commentaire=document.formcontact.commentaire;
  if(commentaire.value==""){
    alert("Veuillez remplir le champs commentaire" );
    commentaire.style.borderColor='blue';
    commentaire.focus();
    return false;
  }
  else{
    commentaire.style.borderColor='';
  }
}

setTimeout(()=>{
  document.querySelector('.loader').style.display="none"
},2240);