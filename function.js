
var ViewModel = {
	labels: ko.observableArray([]),
	newLabel:ko.observable(''),
	errorMessage:ko.observable(''),
	
	addLabel: function () {
		var labelObj = {
			name: ko.observable( this.newLabel() ),
			isEdit: ko.observable( false )
		};
		var test = this.isValid( this.newLabel() );

		if ( test === true ) {
			this.labels.push( labelObj );
			this.newLabel('');
			this.errorMessage('');
		};

		if(this.labels().length >=6 ){
			this.errorMessage('You have reached the maxim label number');
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
		var test = ViewModel.isValid( this.name());
		if(test === false){
			return false;
		}

		this.isEdit( false );
	},


	isValid: function(labelValue){
		var self = ViewModel;
		
		if ( labelValue.length === 0 ) {
			self.errorMessage('Write text in the input field');
			return false;
		}

		var filteredArray = self.labels().filter(function(item) {
			return (item.name() === labelValue);
		});

		if ( filteredArray.length > 0 ) {
			self.errorMessage('You have already written this text');
			return false;
		}

		return true;
	}


};

ko.applyBindings(ViewModel);


