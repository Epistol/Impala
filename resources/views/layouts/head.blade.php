<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@if(trim($__env->yieldContent('title')))@yield('title') - @endif{{ config('app.name', 'CDG') }}</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>

<script>
    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("myCanvasNav").style.width = "100%";
        document.getElementById("myCanvasNav").style.height = "100%";
        document.getElementById("myCanvasNav").style.opacity = "0.8";


    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("myCanvasNav").style.width = "0%";
        document.getElementById("myCanvasNav").style.height = "0%";
        document.getElementById("myCanvasNav").style.opacity = "0";

    }

    // ANGULAR GET ITEMS FROM LOCAL


    var sampleApp = angular.module('sampleApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });




    var app = angular.module('Employees', ['storageService']);

    // Create the Controller
    app.controller('EmployeesController', ['$scope', 'getLocalStorage', function ($scope, getLocalStorage) {
        $scope.appTitle = "LocalStorage Demo";
        $scope.appHeadline = "AngularJS and HTML5";

        //Read the Employee List from LocalStorage
        $scope.employees = getLocalStorage.getEmployees();

        //Count the Employee List
        $scope.count = $scope.employees.length;


        //Add Employee - using AngularJS push to add Employee in the Employee Object
        //Call Update Employee to update the locally stored Employee List
        //Reset the AngularJS Employee scope
        //Update the Count
        $scope.addEmployee = function () {
            $scope.employees.push({ 'empno': $scope.empno, 'empname': $scope.empname, 'empsalary': $scope.empsalary });
            getLocalStorage.updateEmployees($scope.employees);
            $scope.empno = '';
            $scope.empname = '';
            $scope.empsalary = '';
            $scope.count = $scope.employees.length;
        };

        //Delete Employee - Using AngularJS splice to remove the emp row from the Employee list
        //All the Update Employee to update the locally stored Employee List
        //Update the Count
        $scope.deleteEmployee = function (emp) {
            $scope.employees.splice($scope.employees.indexOf(emp), 1);
            getLocalStorage.updateEmployees($scope.employees);
            $scope.count = $scope.employees.length;
        };
    }]);

    //Create the Storage Service Module
    //Create getLocalStorage service to access UpdateEmployees and getEmployees method
    var storageService = angular.module('storageService', []);
    storageService.factory('getLocalStorage', function () {
        var employeeList = {};
        return {
            list: employeeList,
            updateEmployees: function (EmployeesArr) {
                if (window.localStorage && EmployeesArr) {
                    //Local Storage to add Data
                    localStorage.setItem("employees", angular.toJson(EmployeesArr));
                }
                employeeList = EmployeesArr;

            },
            getEmployees: function () {
                //Get data from Local Storage
                employeeList = angular.fromJson(localStorage.getItem("employees"));
                return employeeList ? employeeList : [];
            }
        };

    });


    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "transparent",
                    "text": "#14a7d0",
                    "border": "#14a7d0"
                }
            }
        })});
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("form-captcha").submit();
    }

</script>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="{{asset('js/app.js')}}"></script>

<script src="{{asset('js/jquery.autocomplete.js')}}"></script>