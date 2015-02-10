<script>
Month = can.Model({
    findAll: 'GET '+baseURL+'/api/month'
},{});
EventsControl = can.Control(
{
	init: function()
    {
    	this.Search();
    },
    //Events
    '.last-month click': function(element, event)
    {
    	event.preventDefault();
    	var stateObject = {};
		var title = "Group Bookings/Events - Four Green Fields Farm";
		var newUrl = baseURL+"/events/september-2014";
		history.pushState(stateObject,title,newUrl);
    },
    //Methods
    'Search': function()
    {
    	var self = this;
    	var MonthObject = {
            month: 10,
            year: 2014
        };
    	Month.findAll(MonthObject, function(date) {
            self.BindMonth(date);
        });
    },
    'BindMonth': function(date)
    {
    	//
    },
});

events_control = new EventsControl($('body'));
</script>