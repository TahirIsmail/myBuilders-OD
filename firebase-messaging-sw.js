importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js');

// Your web app's Firebase configuration (put the actual data to configure)
// const firebaseConfig = {
//     apiKey: "your key",
//     authDomain: "your app url",
//     databaseURL: "your database URL",
//     projectId: "your project id",
//     storageBucket: "your storage bucket",
//     messagingSenderId: "your message senderid",
//     appId: "your app id"
// };
const firebaseConfig = {
  apiKey: "AIzaSyBIXyXbWUR9ef7zBJ-r0Z_wz3Qd4Rx_tEI",
  authDomain: "builderio-4606c.firebaseapp.com",
  projectId: "builderio-4606c",
  storageBucket: "builderio-4606c.appspot.com",
  messagingSenderId: "1001812906902",
  appId: "1:1001812906902:web:96b4b70ad72943240983b7",
  measurementId: "G-DLN6NYXHPB"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler((payload) => {
    console.log(
      '[firebase-messaging-sw.js] Received background message ',
      payload
    );
    const {title, body} = payload.notification;
    const notificationOptions = {
      body
    };
  
    self.registration.showNotification(title, notificationOptions);
});