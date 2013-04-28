Ext.ns('badger.desktop.store');

badger.desktop.store.StoreUtils = {
	loadTags: function(me, record) {
		var tagStore = record.tags();
		tagStore.load({
			scope: {
				record: record
			},
			callback: function(tags, operation) {
				operation.scope.record.tags().removeAll();
				for(var tagIndex in tags) {
					var tagIntermediate = tags[tagIndex];
					tagIntermediate.getTag({
						scope: {
							record: operation.scope.record
						},
						callback: function(tag, operation) {
							operation.scope.record.tags().add(tag);
							me.fireEvent('refresh', me);
						}
					});
				}
			}
		});
	}
};
