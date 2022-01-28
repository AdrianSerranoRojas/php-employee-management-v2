const ENDPOINT =
  document.getElementById("mainNav").dataset["base_url"] + "employee";


//   $(() => {
 var baseUrl = document.getElementById("mainNav").dataset["base_url"];
//     // const EMAIL_REGX = /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/;
//     // const PCODE_REGX = /^[0-9]{5,9}$/;
//     // const PHONE_REGX = /^[0-9]{9,12}$/;
//     const onRowClick = (args) => {
//       let id = args.item.id;
//       location.href = `${baseUrl}employee/show/${id}`;
//     };
//   })
$('#grid_table').jsGrid({

    

    width: "100%",
    height: "600px",
    filtering: false,
    inserting: true,
    editing: true,
    sorting: true,
    paging: true,
    autoload: true,
    pageSize: 10,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete the Client?",
  
    // rowClick: function(args){
    //   console.log(args["item"].id);
    //   $idValue = toString(args["item"].id);
    //   console.log($idValue);
    //   window.location.assign("./../src/employee.php?id=" + $idValue);
    // },

    rowClick: (args) => {
        let id = args.item.id;
        location.href = `${baseUrl}employee/show/${id}`;
      },

    // rowClick: onRowClick,
  
    controller: {
        loadData: () =>
    fetch(ENDPOINT + "/getEmployees", {
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    }).then((response) => response.json()),
    //   loadData: function(filter) {
    //     return $.ajax({
    //       type: "GET",
    //       url: ENDPOINT + "/getEmployees",
    //       data: filter,
    //       dataType: "JSON"
    //       // success: function(response){
    //       //   console.log("GET: ", response);
    //       // }
    //     });
    //   },
      insertItem: function(item) {
        return $.ajax({
          type: "POST",
          url: "../src/library/employeeController.php",
          data: item
        });
      },
      updateItem: function(item) {
        return $.ajax({
          type: "PUT",
          url: "../src/library/employeeController.php",
          data: item
        });
      },
      deleteItem: function(item) {
        return $.ajax({
          type: "DELETE",
          url: "../src/library/employeeController.php",
          data: item
        });
      },
    },
    fields: [{
        name: "id",
        type: "hidden",
        css: 'hide'
      },
      {
        name: "name",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        name: "email",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        name: "age",
        type: "text",
        width: 50,
        validate: function(value) {
          if (value > 0) {
            return true;
          }
        }
      },
      {
        name: "streetAddress",
        type: "text",
        width: 70,
        validate: "required"
      },
      {
        name: "city",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        name: "state",
        type: "text",
        width: 80,
        validate: "required"
      },
      {
        name: "postalCode",
        type: "text",
        width: 70,
        validate: "required"
      },
      {
        name: "phoneNumber",
        type: "text",
        width: 150,
        validate: "required"
      },
      {
        type: "control"
      }
    ]
  
  });