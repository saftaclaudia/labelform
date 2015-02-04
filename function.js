
var ViewModel = {
	labels: ko.observableArray([]),
	newLabel: {
		label: ko.observable(''),
	},
	
	addLabel: function () {
		var labelAdded = {
			label: ko.observable(this.newLabel.label()),
		};
			this.labels.push(labelAdded);

	},
	removeLabels: function(item){
		WiewModel.labels.remove(item);
	}

};

ko.applyBindings(ViewModel);

