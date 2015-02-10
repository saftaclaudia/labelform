
var ViewModel = {
	labels: ko.observableArray([]),
	newLabel:ko.observable(''),
	
	addLabel: function () {
		var labelObj = {
			name: ko.observable( this.newLabel() ),
			isEdit: ko.observable( false )
		};
		if( this.labels().length <=6 ){
			this.labels.push( labelObj );
		};
	},
	removeAllLabels: function(){
		this.labels([]);
	},
	removeLabel: function(item){
		ViewModel.labels.remove(item);
	},
	editLabel: function(){
		this.isEdit( true );
	},
	cancelEditLabel: function(){
		this.isEdit( false );
	}

};

ko.applyBindings(ViewModel);


