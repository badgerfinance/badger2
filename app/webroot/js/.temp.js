Ext.ns('Bancha');
Bancha.REMOTE_API = {
	"url" : "\/bancha-dispatcher.php",
	"namespace" : "Bancha.RemoteStubs",
	"type" : "remoting",
	"metadata" : {
		"Account" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "currency_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "lower_limit",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "float"
					}, {
						"name" : "upper_limit",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "float"
					}, {
						"name" : "parser",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "currentAmount",
						"type" : "auto",
						"persist" : false
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Currency",
						"foreignKey" : "currency_id",
						"getterName" : "getCurrency",
						"setterName" : "setCurrency",
						"name" : "currency"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.AccountProperty",
						"foreignKey" : "account_id",
						"getterName" : "accountProperties",
						"setterName" : "setAccountProperties",
						"name" : "accountProperties"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "account_id",
						"getterName" : "recurringTransactions",
						"setterName" : "setRecurringTransactions",
						"name" : "recurringTransactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "account_id",
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Tag",
						"foreignKey" : {
							"className" : "Tag",
							"joinTable" : "accounts_tags",
							"foreignKey" : "account_id",
							"associationForeignKey" : "tag_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "AccountsTag",
							"dynamicWith" : true
						},
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"AccountProperty" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "key",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "value",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "key"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}],
			"sorters" : []
		},
		"AccountsTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}],
			"sorters" : []
		},
		"ChildTagsParentTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "child_tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "parent_tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "parent_tag_id",
						"getterName" : "getParent",
						"setterName" : "setParent",
						"name" : "parent"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "child_tag_id",
						"getterName" : "getChild",
						"setterName" : "setChild",
						"name" : "child"
					}],
			"sorters" : []
		},
		"Currency" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "long_name",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "symbol",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "long_name"
					}, {
						"type" : "presence",
						"field" : "symbol"
					}],
			"associations" : [{
						"type" : "hasMany",
						"model" : "Bancha.model.Account",
						"foreignKey" : "currency_id",
						"getterName" : "accounts",
						"setterName" : "setAccounts",
						"name" : "accounts"
					}],
			"sorters" : []
		},
		"RecurringTransaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "amount",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "float"
					}, {
						"name" : "begin_date",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "date",
						"dateFormat" : "Y-m-d"
					}, {
						"name" : "end_date",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "date",
						"dateFormat" : "Y-m-d"
					}, {
						"name" : "repeat_unit",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "repeat_interval",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "transaction_partner",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}, {
						"type" : "presence",
						"field" : "repeat_unit"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Tag",
						"foreignKey" : {
							"className" : "Tag",
							"joinTable" : "recurring_transactions_tags",
							"foreignKey" : "recurring_transaction_id",
							"associationForeignKey" : "tag_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "RecurringTransactionsTag",
							"dynamicWith" : true
						},
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"RecurringTransactionsTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "recurring_transaction_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "getRecurringTransaction",
						"setterName" : "setRecurringTransaction",
						"name" : "recurringTransaction"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}],
			"sorters" : []
		},
		"Setting" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "level",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "key",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "value",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "level"
					}, {
						"type" : "presence",
						"field" : "key"
					}],
			"associations" : [],
			"sorters" : []
		},
		"Tag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "keyword",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "expense",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "boolean"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "hasMany",
						"model" : "Bancha.model.Account",
						"foreignKey" : {
							"className" : "Account",
							"joinTable" : "accounts_tags",
							"foreignKey" : "tag_id",
							"associationForeignKey" : "account_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "AccountsTag",
							"dynamicWith" : true
						},
						"getterName" : "accounts",
						"setterName" : "setAccounts",
						"name" : "accounts"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : {
							"className" : "RecurringTransaction",
							"joinTable" : "recurring_transactions_tags",
							"foreignKey" : "tag_id",
							"associationForeignKey" : "recurring_transaction_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "RecurringTransactionsTag",
							"dynamicWith" : true
						},
						"getterName" : "recurringTransactions",
						"setterName" : "setRecurringTransactions",
						"name" : "recurringTransactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : {
							"className" : "Transaction",
							"joinTable" : "tags_transactions",
							"foreignKey" : "tag_id",
							"associationForeignKey" : "transaction_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "TagsTransaction",
							"dynamicWith" : true
						},
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Tag",
						"foreignKey" : {
							"className" : "Tag",
							"joinTable" : "child_tags_parent_tags",
							"foreignKey" : "child_tag_id",
							"associationForeignKey" : "parent_tag_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "ChildTagsParentTag",
							"dynamicWith" : true
						},
						"getterName" : "parents",
						"setterName" : "setParents",
						"name" : "parents"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Tag",
						"foreignKey" : {
							"className" : "Tag",
							"joinTable" : "child_tags_parent_tags",
							"foreignKey" : "parent_tag_id",
							"associationForeignKey" : "child_tag_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "ChildTagsParentTag",
							"dynamicWith" : true
						},
						"getterName" : "children",
						"setterName" : "setChildren",
						"name" : "children"
					}],
			"sorters" : []
		},
		"TagsTransaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "transaction_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transaction_id",
						"getterName" : "getTransaction",
						"setterName" : "setTransaction",
						"name" : "transaction"
					}],
			"sorters" : []
		},
		"Transaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "valuta_date",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "date",
						"dateFormat" : "Y-m-d H:i:s"
					}, {
						"name" : "amount",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "float"
					}, {
						"name" : "recurring_transaction_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "transaction_partner",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "transferal_source_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "transferal_target_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "parser_text",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "getRecurringTransaction",
						"setterName" : "setRecurringTransaction",
						"name" : "recurringTransaction"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transferal_target_id",
						"getterName" : "getTransferalSource",
						"setterName" : "setTransferalSource",
						"name" : "transferalSource"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transferal_source_id",
						"getterName" : "getTransferalTarget",
						"setterName" : "setTransferalTarget",
						"name" : "transferalTarget"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Tag",
						"foreignKey" : {
							"className" : "Tag",
							"joinTable" : "tags_transactions",
							"foreignKey" : "transaction_id",
							"associationForeignKey" : "tag_id",
							"unique" : "keepExisting",
							"conditions" : "",
							"fields" : "",
							"order" : "",
							"limit" : "",
							"offset" : "",
							"finderQuery" : "",
							"deleteQuery" : "",
							"insertQuery" : "",
							"with" : "TagsTransaction",
							"dynamicWith" : true
						},
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"_UID" : "517c0a3b88d46846603364",
		"_ServerDebugLevel" : 2,
		"_ServerError" : false
	},
	"actions" : {
		"Account" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"AccountProperty" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"AccountsTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"ChildTagsParentTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Currency" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"RecurringTransaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"RecurringTransactionsTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Setting" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Tag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"TagsTransaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Transaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Bancha" : [{
					"name" : "loadMetaData",
					"len" : 1
				}, {
					"name" : "logError",
					"len" : 2
				}]
	}
}

Ext.ns('Bancha');
Bancha.REMOTE_API = {
	"url" : "\/bancha-dispatcher.php",
	"namespace" : "Bancha.RemoteStubs",
	"type" : "remoting",
	"metadata" : {
		"Account" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "currency_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "lower_limit",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "float"
					}, {
						"name" : "upper_limit",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "float"
					}, {
						"name" : "parser",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "currentAmount",
						"type" : "auto",
						"persist" : false
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Currency",
						"foreignKey" : "currency_id",
						"getterName" : "getCurrency",
						"setterName" : "setCurrency",
						"name" : "currency"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.AccountProperty",
						"foreignKey" : "account_id",
						"getterName" : "accountProperties",
						"setterName" : "setAccountProperties",
						"name" : "accountProperties"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "account_id",
						"getterName" : "recurringTransactions",
						"setterName" : "setRecurringTransactions",
						"name" : "recurringTransactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "account_id",
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.AccountsTag",
						"foreignKey" : "account_id",
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"AccountProperty" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "key",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "value",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "key"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}],
			"sorters" : []
		},
		"AccountsTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}],
			"sorters" : []
		},
		"ChildTagsParentTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "child_tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "parent_tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "parent_tag_id",
						"getterName" : "getParent",
						"setterName" : "setParent",
						"name" : "parent"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "child_tag_id",
						"getterName" : "getChild",
						"setterName" : "setChild",
						"name" : "child"
					}],
			"sorters" : []
		},
		"Currency" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "long_name",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "symbol",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "long_name"
					}, {
						"type" : "presence",
						"field" : "symbol"
					}],
			"associations" : [{
						"type" : "hasMany",
						"model" : "Bancha.model.Account",
						"foreignKey" : "currency_id",
						"getterName" : "accounts",
						"setterName" : "setAccounts",
						"name" : "accounts"
					}],
			"sorters" : []
		},
		"RecurringTransaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "amount",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "float"
					}, {
						"name" : "begin_date",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "date",
						"dateFormat" : "Y-m-d"
					}, {
						"name" : "end_date",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "date",
						"dateFormat" : "Y-m-d"
					}, {
						"name" : "repeat_unit",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "repeat_interval",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "transaction_partner",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}, {
						"type" : "presence",
						"field" : "repeat_unit"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.RecurringTransactionsTag",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"RecurringTransactionsTag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "recurring_transaction_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "getRecurringTransaction",
						"setterName" : "setRecurringTransaction",
						"name" : "recurringTransaction"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}],
			"sorters" : []
		},
		"Setting" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "level",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "key",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "value",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "level"
					}, {
						"type" : "presence",
						"field" : "key"
					}],
			"associations" : [],
			"sorters" : []
		},
		"Tag" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "keyword",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "expense",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "boolean"
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "hasMany",
						"model" : "Bancha.model.AccountsTag",
						"foreignKey" : "tag_id",
						"getterName" : "accounts",
						"setterName" : "setAccounts",
						"name" : "accounts"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.RecurringTransactionsTag",
						"foreignKey" : "tag_id",
						"getterName" : "recurringTransactions",
						"setterName" : "setRecurringTransactions",
						"name" : "recurringTransactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.TagsTransaction",
						"foreignKey" : "tag_id",
						"getterName" : "transactions",
						"setterName" : "setTransactions",
						"name" : "transactions"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.ChildTagsParentTag",
						"foreignKey" : "child_tag_id",
						"getterName" : "parents",
						"setterName" : "setParents",
						"name" : "parents"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.ChildTagsParentTag",
						"foreignKey" : "parent_tag_id",
						"getterName" : "children",
						"setterName" : "setChildren",
						"name" : "children"
					}],
			"sorters" : []
		},
		"TagsTransaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "tag_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "transaction_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}],
			"validations" : [],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Tag",
						"foreignKey" : "tag_id",
						"getterName" : "getTag",
						"setterName" : "setTag",
						"name" : "tag"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transaction_id",
						"getterName" : "getTransaction",
						"setterName" : "setTransaction",
						"name" : "transaction"
					}],
			"sorters" : []
		},
		"Transaction" : {
			"idProperty" : "id",
			"fields" : [{
						"name" : "id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "title",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "string"
					}, {
						"name" : "description",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "account_id",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "int"
					}, {
						"name" : "valuta_date",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "date",
						"dateFormat" : "Y-m-d H:i:s"
					}, {
						"name" : "amount",
						"allowNull" : false,
						"defaultValue" : "",
						"type" : "float"
					}, {
						"name" : "recurring_transaction_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "transaction_partner",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "transferal_source_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "transferal_target_id",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "int"
					}, {
						"name" : "parser_text",
						"allowNull" : true,
						"defaultValue" : null,
						"type" : "string"
					}, {
						"name" : "transaction_counterpart_id",
						"type" : "auto",
						"persist" : false
					}],
			"validations" : [{
						"type" : "presence",
						"field" : "title"
					}],
			"associations" : [{
						"type" : "belongsTo",
						"model" : "Bancha.model.Account",
						"foreignKey" : "account_id",
						"getterName" : "getAccount",
						"setterName" : "setAccount",
						"name" : "account"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.RecurringTransaction",
						"foreignKey" : "recurring_transaction_id",
						"getterName" : "getRecurringTransaction",
						"setterName" : "setRecurringTransaction",
						"name" : "recurringTransaction"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transferal_target_id",
						"getterName" : "getTransferalSource",
						"setterName" : "setTransferalSource",
						"name" : "transferalSource"
					}, {
						"type" : "belongsTo",
						"model" : "Bancha.model.Transaction",
						"foreignKey" : "transferal_source_id",
						"getterName" : "getTransferalTarget",
						"setterName" : "setTransferalTarget",
						"name" : "transferalTarget"
					}, {
						"type" : "hasMany",
						"model" : "Bancha.model.TagsTransaction",
						"foreignKey" : "transaction_id",
						"getterName" : "tags",
						"setterName" : "setTags",
						"name" : "tags"
					}],
			"sorters" : []
		},
		"_UID" : "517d7be870539354916723",
		"_ServerDebugLevel" : 2,
		"_ServerError" : false
	},
	"actions" : {
		"Account" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"AccountProperty" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"AccountsTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"ChildTagsParentTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Currency" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"RecurringTransaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"RecurringTransactionsTag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Setting" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Tag" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"TagsTransaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Transaction" : [{
					"name" : "getAll",
					"len" : 0
				}, {
					"name" : "read",
					"len" : 1
				}, {
					"name" : "create",
					"len" : 1
				}, {
					"name" : "update",
					"len" : 1
				}, {
					"name" : "destroy",
					"len" : 1
				}, {
					"name" : "submit",
					"len" : 1,
					"formHandler" : true
				}],
		"Bancha" : [{
					"name" : "loadMetaData",
					"len" : 1
				}, {
					"name" : "logError",
					"len" : 2
				}]
	}
}