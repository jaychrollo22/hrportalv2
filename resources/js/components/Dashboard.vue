<template>
   <div>
  
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(/img/bg.jpg); background-size: cover; background-position: center bottom;">
          <!-- Mask -->
        <span class="mask bg-gradient-success opacity-7"></span>

        <div class="container-fluid">
            <div class="header-body">
               <div class="row">
                <div class="col-xl-6 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Active</h5>
                        <span class="h2 font-weight-bold mb-0">{{ employees }}</span>
                        </div>
                        <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-users"></i>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"></span>
                        <span class="text-nowrap">Last updated: Today</span>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">New Hire</h5>
                        <span class="h2 font-weight-bold mb-0">{{ new_employees.length }}</span>
                        </div>
                        <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-danger mr-2"></span>
                        <span class="text-nowrap">Last updated: Today</span>
                    </p>
                    </div>
                </div>
                </div>
                <!-- <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Inactive</h5>
                        <span class="h2 font-weight-bold mb-0">{{ total_inactives }}</span>
                        </div>
                        <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                            <i class="fas fa-user-minus"></i>
                        </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-warning mr-2"></span>
                        <span class="text-nowrap">Last updated: Today</span>
                    </p>
                    </div>
                </div>
                </div> -->

                <!-- <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Verified Employee</h5>
                            <span class="h2 font-weight-bold mb-0">{{ total_updates }}</span>
                            </div>
                            <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            </div>
                        </div>
                        <p class="mt-2 mb-0 text-muted text-sm">
                            <span class="text-success mr-2"> {{employee_verify_percentage}}%</span>
                            <span class="text-nowrap">Last updated: Today</span>
                            <span class="ml-2">
                                <a href="/verified-employees" class="btn btn-sm btn-primary">See all</a>
                            </span>
                            
                        </p>
                        
                        </div>
                    </div>
                </div> -->
            </div>
            </div>
        </div>

    </div>
       
        
        

    <div class="container-fluid mt--7">
        <div class="row">
      
            <div class="col-sm-12 mb-3 mb-xl-0 ">
                <div class="card shadow mb-3">
                    <h2 class="mb-3 mt-2 ml-2">Year to Date Headcount</h2>
                    <div class="card-body">
                        <bar-chart :chart-data="dataYeartodateHeadcount" :height="70" :download="true"  ></bar-chart>
                    </div>
                
                </div>
            </div>

            <div class="col-sm-12 mb-3 mb-xl-0 ">
                <div class="card shadow mb-3">
                    <h2 class="mb-3 mt-2 ml-2">Headcount per Cluster </h2>
                    <div class="card-body">
                        <bar-chart :chart-data="dataClusterHeadcount" :height="70" :download="true"  ></bar-chart>
                    </div>
                
                </div>
            </div>
         
            <div class="col-sm-6 mb-5">
                <div class="col-sm-12 mb-3 mb-xl-0">
                    <div class="card shadow mb-3">
                        <h2 class="mb-3 mt-2 ml-2">Employee Age</h2>
                        <div class="card-body">
                            <bar-chart :chart-data="dataEmployeeAgecount" :height="100"></bar-chart>
                        </div>
                    
                    </div>
                </div>
                <div class="col-sm-12 mb-3 mb-xl-0">
                    <div class="card shadow mb-3">
                        <h2 class="mb-3 mt-2 ml-2">Headcount per Region</h2>
                        <div class="card-body">
                            <bar-chart :chart-data="dataEmployeeRegioncount" :height="100"></bar-chart>
                        </div>
                    
                    </div>
                </div>
                <div class="col-sm-12 mb-3 mb-xl-0">
                    <div class="card shadow mb-3">
                        <h2 class="mb-3 mt-2 ml-2">Gender</h2>
                        <div class="card-body">
                            <bar-chart :chart-data="dataEmployeeGendercount" :height="100"></bar-chart>
                        </div>
                    
                    </div>
                </div>
                <div class="col-sm-12 mb-3 mb-xl-0">
                    <div class="card shadow mb-3">
                        <h2 class="mb-3 mt-2 ml-2">Marital Status</h2>
                        <div class="card-body">
                            <bar-chart :chart-data="dataEmployeeMaritalStatuscount" :height="100"></bar-chart>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mb-5">
                <div class="col-sm-12 mb-5 mb-xl-0">
                    <div class="card shadow">
                        
                        <h2 class="mb-3 mt-2 ml-2">Employee Approval Request(s)</h2>
                        <span class="mt-2 mr-2 mb-2 text-right">
                            <a href="/employee_approval_requests" class="btn btn-sm btn-primary">See all</a>
                        </span>
                        

                        <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(employee_request,index) in filteredQueues" v-bind:key="index">
                                    <td>{{ employee_request.employee.first_name }} {{ employee_request.employee.last_name }}</td>
                                    <td>{{ employee_request.created_at }}</td>
                                    <td>{{ employee_request.status }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>

                        <div class="row mb-3 mt-3 ml-1" v-if="filteredQueues.length ">
                            <div class="col-6">
                                <button :disabled="!showPreviousLink()" class="btn btn-default btn-sm btn-fill" v-on:click="setPage(requestcurrentPage - 1)"> Previous </button>
                                    <span class="text-dark">Page {{ requestcurrentPage + 1 }} of {{ totalPages }}</span>
                                <button :disabled="!showNextLink()" class="btn btn-default btn-sm btn-fill" v-on:click="setPage(requestcurrentPage + 1)"> Next </button>
                            </div>
                            <div class="col-6 text-right">
                                <span class="mr-2">Filtered employee request(s) : {{ filteredQueues.length }} </span><br>
                                <span class="mr-2">Total employee request(s) : {{ employee_approval_requests.length }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 mt-3 mb-5 mb-xl-0">
                    <div class="card shadow mb-5">
                        <h2 class="mb-3 mt-2 ml-2">New Employees</h2>
                        <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Department</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(new_employee,index) in newfilteredQueues" v-bind:key="index">
                                    <td>{{ new_employee.employee_number }}</td>
                                    <td>{{ new_employee.first_name }} {{ new_employee.last_name }}</td>
                                    <td>{{ new_employee.companies[0].name }}</td>
                                    <td>{{ new_employee.departments[0].name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>

                        <div class="row mb-3 mt-3 ml-1" v-if="newfilteredQueues.length ">
                            <div class="col-6">
                                <button :disabled="!newshowPreviousLink()" class="btn btn-default btn-sm btn-fill" v-on:click="newsetPage(newcurrentPage - 1)"> Previous </button>
                                    <span class="text-dark">Page {{ newcurrentPage + 1 }} of {{ newtotalPages }}</span>
                                <button :disabled="!newshowNextLink()" class="btn btn-default btn-sm btn-fill" v-on:click="newsetPage(newcurrentPage + 1)"> Next </button>
                            </div>
                            <div class="col-6 text-right">
                                <span class="mr-2">Filtered New Employee(s) : {{ newfilteredQueues.length }} </span><br>
                                <span class="mr-2">Total New Employee(s) : {{ new_employees.length }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        
        </div>
      
      </div>
    </div>  

    
</template>


<script>
import BarChart from './Charts/BarChart.js'
import LineChart from './Charts/LineChart.js'
    export default {
        components: {
            BarChart,
            LineChart
        },
        data(){
            return {
                dataYeartodateHeadcount: null,
                dataEmployeeAgecount: null,
                dataEmployeeRegioncount: null,
                dataEmployeeGendercount: null,
                dataEmployeeMaritalStatuscount: null,
                dataClusterHeadcount: null,
                employees: 0,
                new_employees: [],
                total_inactives: 0,
                total_updates: 0,
                employee_approval_requests : [],
                errors: [],
                requestcurrentPage: 0,
                requestitemsPerPage: 10,
                requestkeywords: "",
                newcurrentPage: 0,
                newitemsPerPage: 10,
                newkeywords: "",
                employee_verify_percentage : 0,
            }
        },
        created(){
            this.fetchEmployees();
            this.fetchTotalInactives();
            this.fetchNewEmployees();
            this.fetchUpdateEmployees();
            this.fetchEmployeeApprovalRequests();

            this.fetchEmployeeYearToEndHeadcount();
            this.fetchEmployeeAgecount();
            this.fetchEmployeeRegioncount();
            this.fetchEmployeeGendercount();
            this.fetchEmployeeMaritalStatuscount();

            this.fetchEmployeeClusterHeadcount();
            
        },
        methods:{
            fetchEmployeeYearToEndHeadcount(){
                axios.get('/year-to-date-head-count')
                .then(response => { 
                    this.yearToEndHeadfillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            yearToEndHeadfillData (headcount)
            {
                var count = [];

                headcount.forEach(function(entry) {
                    count.push(entry);
                });
                
                this.dataYeartodateHeadcount = {
                    labels: ['Jan (' + count[0] + ')','Feb (' + count[1] + ')','Mar (' + count[2] + ')','Apr (' + count[3] + ')','May (' + count[4] + ')', 'Jun (' + count[5] + ')' , 'Jul (' + count[6] + ')', 'Aug (' + count[7] + ')', 'Sept (' + count[8] + ')', 'Oct (' + count[9] + ')','Nov (' + count[10] + ')','Dec (' + count[11] + ')'],
                    datasets: [
                        {
                            label: "Year to Date Headcount",
                            backgroundColor: 'rgba(45, 206 , 137, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count,
                        },
                    ]
                }
            },
            fetchEmployeeAgecount(){
                axios.get('/employee-age-count')
                .then(response => { 
                    this.employeeAgefillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            employeeAgefillData (agecount)
            {
                var count = [];
                var label = [];

                agecount.forEach(function(entry) {
                    count.push(entry);
                    label.push()
                });
                
                this.dataEmployeeAgecount = {
                    labels: ['20 yrs. old and Below (' + count[0] + ')','21 - 30 yrs. old (' + count[1] + ')','31-40 yrs. old (' + count[2] + ')','41-50 yrs. old ('  + count[3] + ')','51-60 yrs old (' + count[4] + ')', 'Others (' + count[5] + ')'],
                    datasets: [
                        {
                            label: 'Employee Age',
                            backgroundColor: 'rgba(114,131,231, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count
                        },
                    ]
                }
            },
            fetchEmployeeRegioncount(){
                axios.get('/employee-region-count')
                .then(response => { 
                    this.employeeRegionfillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            employeeRegionfillData (regioncount)
            {
                var count = [];

                regioncount.forEach(function(entry) {
                    count.push(entry);
                });
                
                this.dataEmployeeRegioncount = {
                    labels: ['Luzon (' + count[0] + ')' ,'Visayas (' + count[1] + ')', 'Mindanao (' + count[2] + ')','Others (' + count[3] + ')'],
                    datasets: [
                        {
                            label: 'Headcount per Region',
                            backgroundColor: 'rgba(251,99,64, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count
                        },
                    ]
                }
            },
            fetchEmployeeGendercount(){
                axios.get('/employee-gender-count')
                .then(response => { 
                    this.employeeGenderfillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            employeeGenderfillData (gendercount)
            {
                var count = [];

                gendercount.forEach(function(entry) {
                    count.push(entry);
                });
                
                this.dataEmployeeGendercount = {
                    labels: ['Male (' + count[0] + ')','Female (' + count[1] + ')','Others (' + count[2] + ')'],
                    datasets: [
                        {
                            label: 'Gender',
                            backgroundColor: 'rgba(255,214,0, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count
                        },
                    ]
                }
            },
            fetchEmployeeMaritalStatuscount(){
                axios.get('/employee-marital-status-count')
                .then(response => { 
                    this.employeeMaritalStatusfillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            employeeMaritalStatusfillData (maritalstatuscount)
            {
                var count = [];

                maritalstatuscount.forEach(function(entry) {
                    count.push(entry);
                });
                
                this.dataEmployeeMaritalStatuscount = {
                    labels: ['Single (' + count[0] + ')','Married (' + count[1] + ')','Widow (' + count[2] + ')','Others (' + count[3] + ')'],
                    datasets: [
                        {
                            label: 'Marital Status',
                            backgroundColor: 'rgba(17,205,239, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count
                        },
                    ]
                }
            },
            fetchEmployeeClusterHeadcount(){
                axios.get('/employee-cluster-count')
                .then(response => { 

                    this.employeeClusterfillData(response.data);
                    
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            employeeClusterfillData (clustercount)
            {
                var count = [];
                var names = [];

                clustercount.forEach(function(entry) {
                    count.push(entry.count);
                    names.push(entry.name);
                });
                
                this.dataClusterHeadcount = {
                    labels: names,
                    datasets: [
                        {
                            label: 'Headcount per Cluster',
                            backgroundColor: 'rgba(252,25,70, 0.5)',
                            pointBackgroundColor: 'white',
                            borderWidth: 1,
                            pointBorderColor: '#249EBF',
                            data: count
                        },
                    ]
                }
            },
           getEmployeeVerifiedPercentage(){
                let v = this;
                v.employee_verify_percentage = 0;
                v.employee_verify_percentage =  Math.floor(v.total_updates/v.employees*100);
           },
           fetchEmployees(){
                axios.get('/employees-index-count')
                .then(response => { 
                    this.employees = response.data;
                    this.getEmployeeVerifiedPercentage();

                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
           fetchTotalInactives(){
                axios.get('/employees-inactive-count')
                .then(response => { 
                    this.total_inactives = response.data;
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
           fetchNewEmployees(){
                axios.get('/employees-new-count')
                .then(response => { 
                    this.new_employees = response.data;
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
           fetchUpdateEmployees(){
                axios.get('/employees-update-count')
                .then(response => { 
                    this.total_updates = response.data;
                     this.getEmployeeVerifiedPercentage();
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },
            fetchEmployeeApprovalRequests(){
                axios.get('/employee-approval-requests-pending-all')
                .then(response => { 
                    this.employee_approval_requests = response.data;
                })
                .catch(error => { 
                    this.errors = error.response.data.error;
                })
            },

            setPage(pageNumber) {
                this.requestcurrentPage = pageNumber;
            },

            resetStartRow() {
                this.requestcurrentPage = 0;
            },

            showPreviousLink() {
                return this.requestcurrentPage == 0 ? false : true;
            },

            showNextLink() {
                return this.requestcurrentPage == (this.totalPages - 1) ? false : true;
            },

            newsetPage(pageNumber) {
                this.newcurrentPage = pageNumber;
            },

            newresetStartRow() {
                this.newcurrentPage = 0;
            },

            newshowPreviousLink() {
                return this.newcurrentPage == 0 ? false : true;
            },

            newshowNextLink() {
                return this.newcurrentPage == (this.newtotalPages - 1) ? false : true;
            } 

        },
        computed:{
            filteredemployeerequests(){
                let self = this;
                return Object.values(self.employee_approval_requests).filter(employee_request => {
                    let full_name = employee_request.employee.first_name + " " + employee_request.employee.last_name;
                    return employee_request.status.toLowerCase().includes(this.requestkeywords.toLowerCase()) || employee_request.employee.first_name.toLowerCase().includes(this.requestkeywords.toLowerCase()) || employee_request.employee.last_name.toLowerCase().includes(this.requestkeywords.toLowerCase()) || full_name.toLowerCase().includes(this.requestkeywords.toLowerCase())
                });
            },
            totalPages() {
                return Math.ceil(Object.values(this.employee_approval_requests).length / this.requestitemsPerPage)
            },
            filteredQueues() {
                var index = this.requestcurrentPage * this.requestitemsPerPage;
                var queues_array = this.filteredemployeerequests.slice(index, index + this.requestitemsPerPage);

                if(this.requestcurrentPage >= this.totalPages) {
                    this.requestcurrentPage = this.totalPages - 1
                }

                if(this.requestcurrentPage == -1) {
                    this.requestcurrentPage = 0;
                }

                return queues_array;
            },
            filterednewemployees(){
                let self = this;
                return Object.values(self.new_employees).filter(new_employee => {
                    let full_name = new_employee.first_name + " " + new_employee.last_name;
                    return full_name.toLowerCase().includes(this.newkeywords.toLowerCase()) 
                });
            },
            newtotalPages() {
                return Math.ceil(Object.values(this.new_employees).length / this.newitemsPerPage)
            },
            newfilteredQueues() {
                var index = this.newcurrentPage * this.newitemsPerPage;
                var queues_array = this.filterednewemployees.slice(index, index + this.newitemsPerPage);

                if(this.newcurrentPage >= this.newtotalPages) {
                    this.newcurrentPage = this.newtotalPages - 1
                }

                if(this.newcurrentPage == -1) {
                    this.newcurrentPage = 0;
                }

                return queues_array;
            },
        }
    }
</script>