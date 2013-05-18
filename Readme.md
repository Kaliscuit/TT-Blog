# TaoTao Blog System

*	Databases
	*	article
		*	**id** int auto increase
		*	**title** varchar 50
		*	**content** text
		*	**create_time** timestamp
		*	**update_time** timestamp
		*	**category** int -> FK
		*	**tag** int	-> FK
	*	category
		*	**id** int auto increase
		*	**name** varchar 50
	*	tag
		*	**id** int auto increase
		*	**name** varchar 50
