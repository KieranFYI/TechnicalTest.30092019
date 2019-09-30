<?php

/**
 * Methods for authenticating the user
 *
 * @author Kieran Anderson <kieran@andersons.bz>
 * @date 15:52 2019/9/30
 */ 
class User {
	
	/**
	 * 
	 *
	 * @param string	$username	Username of the account to use
	 * @param string	$password	Password the user is attempting to login with
     * 
	 * @author Kieran Anderson <kieran@andersons.bz>
	 * @date 15:52 2019/09/30
	 *
	 */ 
	public static function /* bool */ Login(string $username, string $password) {
        // Reject the login if the username or password is empty or whitespace
        if (!strlen(trim($username)) || !strlen(trim($password))) {
            return false;
        }

        $loginFile = realpath('./loginDetails.txt');

        if (!file_exists($loginFile)) {
            return false;
        }

        // Get all the login details
        $loginDetails = file($loginFile);

        // Loop the login details and find the user we are attempting to login
        foreach($loginDetails as $loginDetail) {
            // Skip the line if it doesnt container the required seperator
            if (strpos($loginDetail, ':') === false) {
                continue;
            }

            // Get the username and password of this user
            $details = explode(':', $loginDetail);
            $_username = $details[0];
            $_passwordHash = trim($details[1]);

            // Check the usernames match and skip if it doesnt match
            if (strcasecmp($username, $_username) !== 0) {
                continue;
            }

            // Check the passwords match, return true and allow login if they match
            if (password_verify($password, $_passwordHash)) {
                return true;
            }

            // If the passwords don't match deny the login
            return false;
        }

        // If we are unable to find a user return false and deny the login
        return false;
	}
}
