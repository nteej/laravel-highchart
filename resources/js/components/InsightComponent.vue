<template>
        <div id="highChartsBox"></div>
</template>

<script>

    var Highcharts = require('highcharts');
    import axios from 'axios';

    export default {
        data: function () {
            return {
                message: []
            }
        },
        methods: {

            getInsight: function () {

                axios.get('onboard/insight-weekly').then(response => {
                    this.insightData = response.data;
                    Highcharts.chart('highChartsBox', this.insightData);
                }).catch(e => {
                    console.log(e)
                });
            }
        },
        beforeMount() {
            this.getInsight();
        }
    }
</script>