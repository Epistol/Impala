<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.head')
</head>
<body ng-app="Employees">


<div ng-controller="EmployeesController">

    <h1 class="app-title">{{ appTitle }}</h1>
    <h1 class="app-headline">{{ appHeadline }}</h1>

    <form name="frm">
        <table>
            <tr>
                <td>Emp No   :

                </td>
                <td>
                    <input type="text" name="empno" ng-model="empno" required><br />
                </td>
            </tr>
            <tr>
                <td>Emp Name   :

                </td>
                <td>
                    <input type="text" name="empname" ng-model="empname" required>
                </td>
            </tr>
            <tr>
                <td>Emp Salary   :

                </td>
                <td>
                    <input type="text" name="empsalary" ng-model="empsalary">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">

                    <button ng-click="addEmployee()" ng-disabled="frm.$invalid">Add Employee</button>
                </td>

            </tr>
        </table>
    </form>
    <table cellpadding="4" cellspacing="4" border="1" style="border-collapse: collapse; border: solid 1px #000">
        <tr>
            <td><b>Emp No</b></td>
            <td><b>Emp Name</b></td>
            <td><b>Emp Salary</b></td>
            <td><b>Action</b></td>
        </tr>
        <tr ng-repeat="employee in employees">
            <td>{{ employee.empno }}
            </td>
            <td>{{ employee.empname }}
            </td>
            <td>{{ employee.empsalary }}
            </td>
            <td>
                <button ng-click="deleteEmployee(employee)">Delete</button>

            </td>
        </tr>

    </table>
    <div>Total Employees : {{count}}</div>
</div>


<div id="app">
    @yield('content')
</div>

</body>
</html>
