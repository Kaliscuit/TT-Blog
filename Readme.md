# TaoTao Blog System

*	Databases
	*	user
		*	**id** int auto increase
		*	**name** varchar 50
		*	**password** varchar 32
		*	**salt** varcar 5
		*	**email** varchar 160
	*	article
		*	**id** int auto increase
		*	**title** varchar 50
		*	**uid** int -> FK
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
		
*	User
	*	Username
	*	Password
	