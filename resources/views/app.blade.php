<!DOCTYPE html>
<html>
    <head>
        <title>LOGASIA Single Page Aplication</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Iago Nuvem" name="author"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/vendor.css") }}" />
        <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
    </head>
    <body>
        <div class="container" ng-app="SPA">
            <div class="content" ng-controller="MainCtrl">
                <md-toolbar class="md-warn">
                    <div class="md-toolbar-tools">
                      <h2 class="md-flex">LOGASIA Test Assignment</h2>
                    </div>
                </md-toolbar>
                <md-content flex layout-padding>
                    <div class="mdl-cell shadow mdl-cell--12-col mdl-cell--12-col-phone mdl-cell--12-col-tablet" style="background: white;">
                        <div class="panel-header">
                            Bulk Operations
                        </div>
                        <div class="panel-body forms">
                            <form>
                                <label class="lbl_title mdl-cell--2-col">
                                    Select Days
                                </label>
                                <div class=" mdl-cell--3-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <md-datepicker ng-model="from" md-placeholder="From"></md-datepicker>
                                </div>
                                <div class=" mdl-cell--3-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <md-datepicker ng-model="to" md-placeholder="To"></md-datepicker>
                                </div>
                                <div class=" mdl-cell--4-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <label class="lbl_title mdl-cell--12-col">
                                    Refine search:
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-1">
                                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">All Days</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-2">
                                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Weekdays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-3">
                                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Weekends</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-4">
                                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Mondays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-5">
                                        <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Tuesdays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-6">
                                        <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Wednesdays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-7">
                                        <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Thursdays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-8">
                                        <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Fridays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-9">
                                        <input type="checkbox" id="checkbox-9" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Saturdays</span>
                                    </label>
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-cell--4-col" for="checkbox-10">
                                        <input type="checkbox" id="checkbox-10" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Sundays</span>
                                    </label>
                                </div>
                                <br/>

                                <label class="lbl_title mdl-cell--2-col">
                                    Change Price to:
                                </label>
                                <div class=" mdl-cell--10-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="number" id="price">
                                        <label class="mdl-textfield__label" for="price">Price</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                    </div>
                                </div>

                                <label class="lbl_title mdl-cell--2-col">
                                    Available:
                                </label>
                                <div class="mdl-cell--10-col mdl-textfield aux-option">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                      <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                      <span class="mdl-radio__label">Yes</span>
                                    </label>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                      <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="0">
                                      <span class="mdl-radio__label">No</span>
                                    </label>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                    <calendar-md flex layout layout-fill
                        calendar-direction="direction"
                        on-prev-month="prevMonth"
                        on-next-month="nextMonth"
                        on-day-click="dayClick"
                        title-format="'MMMM y'"
                        ng-model='selectedDate'
                        day-format="'d'"
                        day-label-format="'EEE'"
                        day-label-tooltip-format="'EEEE'"
                        day-tooltip-format="'fullDate'"
                        week-starts-on="firstDayOfWeek"
                        day-content="defaultDayContent"></calendar-md> 
                    <div>
                        [[msg]]
                    </div>
                    
                    <!-- <md-table-container>
                      <table md-table md-row-select multiple ng-model="selected" md-progress="promise" ng-repeat="type in vehicles">
                        <thead md-head md-order="query.order" md-on-reorder="getDesserts">
                          <tr class="vehicle_header">
                              <th colspan="7">[[type.description]]</th>
                          </tr>
                          <tr md-row>
                            <th md-column md-order-by="nameToLower"><span>Mon</span></th>
                            <th md-column md-numeric md-order-by="calories.value">Thu</th>
                            <th md-column md-numeric>Wed</th>
                            <th md-column md-numeric>thurs</th>
                            <th md-column md-numeric>fri</th>
                            <th md-column md-numeric>sat</th>
                            <th md-column md-numeric>sun</th>
                          </tr>
                        </thead>
                        <tbody md-body>
                          <tr md-row md-select="vehicle" md-select-id="name" md-auto-select ng-repeat="vehicle in type.vehicle">
                            <td md-cell>[[vehicle.description]]</td>
                            <td md-cell>-</td>
                            <td md-cell>-</td>
                            <td md-cell>-</td>
                            <td md-cell>-</td>
                            <td md-cell>-</td>
                            <td md-cell>-</td>
                          </tr>
                        </tbody>
                      </table>
                    </md-table-container> -->

                    <!-- <md-table-pagination md-limit="query.limit" md-limit-options="[5, 10, 15]" md-page="query.page" md-total="[[desserts.count]]" md-on-paginate="getDesserts" md-page-select></md-table-pagination> -->
                </md-content>
            </div>
        </div>

    <script src="{{ asset("js/vendor.js") }}" type="text/javascript"></script>
    <script> var base_url = "{{ url('/') }}"; </script>
    <script type="text/javascript">
        var app = angular.module('SPA' , ["ng", "ngMaterial", "ngAnimate", "ngAria", "ngSanitize" , "materialCalendar"] , function($interpolateProvider){
            // changing the delimiter to not conflict with laravel
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });
        app.controller('MainCtrl', function($scope, $http , $filter , $q , $mdDialog , MaterialCalendarData) {
            // GET ALL VEHICLES
            $http({
                    method : "GET",
                    url : base_url + "/api/get-vehicles-count-by-type"
                }).then(function mySuccess(response) {
                    $scope.vehiclesByType = response.data;
                    $scope.strVehiclesByType = '';
                    var data_append = '';
                    for(var i in response.data){
                        data_append = '<br/><div><strong>'+response.data[i].count+'</strong> '+response.data[i].type+' available | <strong>$100</strong></div>'
                        $scope.strVehiclesByType = $scope.strVehiclesByType.concat(data_append);
                        // $scope.strVehiclesByType.push(data_append);
                    }
                    // console.log(data);
                }, function myError(response) {
                });

            $scope.dayFormat = "d";


            $scope.showPrompt = function() {
                  var confirm = $mdDialog.prompt()
                  .title('What would you name your dog?')
                  .textContent('Bowser is a common name.')
                  .placeholder('dog name')
                  .ariaLabel('Dog name')
                  .ok('Okay!')
                  .cancel('I\'m a cat person');

              $mdDialog.show(confirm);
            };

            function showDialog(template, items) {
               var parentEl = angular.element(document.body);
               $mdDialog.show({
                 parent: parentEl,
                 template: template,
                 locals: {
                   items: items
                 },
                 controller: DialogController
              });
              function DialogController($scope, $mdDialog, items) {
                $scope.items = items;
                $scope.closeDialog = function() {
                  $mdDialog.hide();
                }
              }
            }
  
            // To select a single date, make sure the ngModel is not an array.
            // $scope.selectedDate = null;

            // If you want multi-date select, initialize it as an array.
            $scope.selectedDate = [];

            
            $scope.firstDayOfWeek = 0; // First day of the week, 0 for Sunday, 1 for Monday, etc.
            $scope.setDirection = function(direction) {
              $scope.direction = direction;
              $scope.dayFormat = direction === "vertical" ? "EEEE, MMMM d" : "d";
            };

            $scope.dayClick = function(date) {
                $http({
                        method : "GET",
                        url : base_url + "/api/get-vehicles-by-day/"+$filter("date")(date, "y-M-d")
                }).then(function mySuccess(response) {
                        // console.log(response.data);
                        var template = '<md-dialog aria-label="List dialog">' +
                        '  <md-dialog-content>'+
                        '   <h3 class="title">Available Vehicles for '+ $filter("date")(date, "MMM d, y")+'</h3><hr/>' +
                        '    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;">'+
                        '     <thead>'+
                        '     <tr><th class="mdl-data-table__cell--non-numeric">Vehicle</th><th>Price</th><th></th></tr>'+
                        '  </thead>'+
                        '   <tbody>'+
                        '      <tr ng-repeat="item in items"><td class="mdl-data-table__cell--non-numeric"><input type="hidden" value="[[item.id]]" />[[item.description]]</td><td>$[[item.price]]</td><td><md-button class="md-raised md-primary" ng-click="$parent.selectVehicle(1)">Select</md-button></td></tr>'+
                        '   </tbody>'+
                        '   </table>'+
                        '  </md-dialog-content>' +
                        '  <md-dialog-actions>' +
                        '    <md-button ng-click="closeDialog()" class="md-primary">' +
                        '      Close ' +
                        '    </md-button>' +
                        '  </md-dialog-actions>' +
                        '</md-dialog>';
                        showDialog(template,response.data);
                                                
                }, function myError(response) {
                });
                // $scope.msg = "You clicked " + $filter("date")(date, "y-M-d");
            };
            

            $scope.prevMonth = function(data) {
              $scope.msg = "You clicked (prev) month " + data.month + ", " + data.year;
            };

            $scope.nextMonth = function(data) {
              $scope.msg = "You clicked (next) month " + data.month + ", " + data.year;
            };

            $scope.tooltips = true;

            $scope.defaultDayContent = function(date) {
                // console.log($filter("date")(date, "y-M-d"));
                $http({
                        method : "GET",
                        url : base_url + "/api/get-vehicles-by-day/"+$filter("date")(date, "y-M-d")
                }).then(function mySuccess(response) {
                        // console.log(response.data);
                        var vehicle_cont = 0;
                        if(response.data == null || response.data == [] || response.data == ''){
                            MaterialCalendarData.setDayContent(date , $scope.strVehiclesByType);  
                        }else{
                           for(var i in response.data){
                                if(response.data[i].available == 1){
                                    vehicle_cont++;
                                }
                            } 
                            MaterialCalendarData.setDayContent(date , vehicle_cont+' vehicle available');
                        }
                        
                }, function myError(response) {
                });


            }

            function DialogController($scope, $mdDialog) {
                $scope.hide = function() {
                  $mdDialog.hide();
                };

                $scope.cancel = function() {
                  $mdDialog.cancel();
                };

                $scope.answer = function(answer) {
                  $mdDialog.hide(answer);
                };
              }
            // $scope.setDayContent = function(date) {
            //     return content;
            // };
        });
    </script>
    </body>
</html>
