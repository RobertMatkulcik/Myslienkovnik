
import 'moment/dist/moment.js';

require('./bootstrap');

import '@fortawesome/fontawesome-free/css/all.css';
// import '@fortawesome/fontawesome-free/js/all.js';
// import  'fullcalendar/main.css';
// import 'fullcalendar';

// var moment = require('moment');


$( document ).ready(function() {
    $(".AddNewButton").on("click", function (){
        $('#addModal').modal();
    });
});
