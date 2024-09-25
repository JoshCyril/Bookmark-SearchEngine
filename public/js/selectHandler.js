
// document.addEventListener('DOMContentLoaded', function () {
//     // Get the select element
//     var selectElement = document.getElementById('mySelect');

//     // Add an event listener for the onchange event
//     selectElement.addEventListener('change', function () {
//         var selectedValue = selectElement.value;

//         // Make an axios GET request to the server
//         axios.get('/process-select', {
//             params: {
//                 selected: selectedValue
//             }
//         })
//         .then(function (response) {
//             // Store the response message in local storage
//             localStorage.setItem('selectedMessage', response.data.message);
//         })
//         .catch(function (error) {
//             console.log(error);
//         });
//     });
// });
