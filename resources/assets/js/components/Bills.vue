<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>List Bills</h3></div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Bill Number</th>
                                    <th>Amount</th>
                                    <th>Customer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for='bill in bills'>
                                    <td>{{ bill.bill_number }}</td>
                                    <td>{{ bill.amount }}</td>
                                    <td>{{ bill.customer.name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
          return {
            bills : []
          }
        },
        mounted() {
            console.log('Component mounted.');
            this.getBillList();
        },
        methods: {
            getBillList: function(){
                var self = this;
                axios.get('bill')
                  .then(function (response) {
                    console.log(response.data);
                    self.bills = response.data;
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
        }
    }
</script>
