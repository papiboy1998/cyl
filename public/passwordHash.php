<?php

class passwordHash {

    // blowfish
    private static $algo = '$2a';
    // cost parameter
    private static $cost = '$10';
    
    private static $encryption_key = "!@#$%^&*";
    private static $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
	/**
	* Returns an encrypted & utf8-encoded
	*/
	public static function encrypt($q) {
		$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( self::$cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( self::$cryptKey ) ) ) );
		return( $qEncoded );
		//bellow is the previous encryption used
		/*
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, self::$encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
		return $encrypted_string;
		*/
	}

	/**
	* Returns decrypted original string
	*/
	public static function decrypt($q) {
		$qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( self::$cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( self::$cryptKey ) ) ), "\0");
		return( $qDecoded );
		//bellow is the previous decryption used
		/*
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, self::$encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
		return $decrypted_string;
		*/
	}
	/**
	* Returns if the password match
	*/
	public static function matchPassword($encryptedPassword, $password) {
        $newPassword = self::encrypt($password);
        return ($encryptedPassword == $newPassword);
    }

    // mainly for internal use
    public static function unique_salt() {
        return substr(sha1(mt_rand()), 0, 22);
    }

    // this will be used to generate a hash
    public static function hash($password) {

        return crypt($password, self::$algo .
                self::$cost .
                '$' . self::unique_salt());
    }

    // this will be used to compare a password against a hash
    public static function check_password($hash, $password) {
        $full_salt = substr($hash, 0, 29);
        $new_hash = crypt($password, $full_salt);
        return ($hash == $new_hash);
    }
}

?>
