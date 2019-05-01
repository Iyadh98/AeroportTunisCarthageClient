var config = {
    apiKey: "AIzaSyASrngsVjEjoRcm_Q5w7QbqCOHSef0xyAQ",
    authDomain: "aeroporttuniscarthage.firebaseapp.com",
    databaseURL: "https://aeroporttuniscarthage.firebaseio.com",
    projectId: "aeroporttuniscarthage",
    storageBucket: "aeroporttuniscarthage.appspot.com",
    messagingSenderId: "178770301354"
};
firebase.initializeApp(config);

const txtEmail=document.getElementById('email');
const txtPassword=document.getElementById('password');
const login=document.getElementById('login');
const signup =document.getElementById('signup');
const signout=document.getElementById('signout');
const item=document.getElementById('links');



firebase.auth().onAuthStateChanged(firebaseUser =>{
    if(firebaseUser){
        console.log(firebaseUser);
        item.style.display="none";
        signout.style.display="inline";
    }
    else{
        console.log('is not logged in')
        item.style.display="block";
        signout.style.display="none";
    }
});

function signoutt(){
    firebase.auth().signOut();
}



function log(){
    const email=txtEmail.value;
    const password=txtPassword.value;
    const auth=firebase.auth();
    firebase.auth().setPersistence(firebase.auth.Auth.Persistence.LOCAL);
    const promise=auth.signInWithEmailAndPassword(email,password);
    promise.catch(e=>console.log(e.message));
}





