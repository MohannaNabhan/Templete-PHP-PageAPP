<?php 

    class Session{

            public function register_new_user($email,$password){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $sql = "INSERT INTO users (user_email,user_pass,user_join) VALUES (:user_email,:user_pass,:user_join)";
                    $status = $dbu->prepare($sql)->execute(
                    [
                        'user_email' => $email,
                        'user_pass' => $password,
                        'user_join' => date("m-d-Y")
                    ]);
                    
                    return $status;
                } catch (Exception $e){
                    die($e->getMessage());
                }
            }
            public function get_user_by_email($email){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $user = $dbu->prepare("SELECT * FROM users WHERE user_email = :user_email");
                    $user->execute(['user_email' => $email]);
                    return $user->fetch();
                  }catch(Exception $e){
                    die($e->getMessage());
                }
            }
            public function new_password($email,$password){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $sql = "UPDATE users SET user_pass=:user_pass WHERE user_email = :user_email";
                    $status = $dbu->prepare($sql)->execute([
                      'user_email' => $email,
                      'user_pass' => $password
                    ]);
                } catch (Exception $e){
                    die($e->getMessage());
                }
            }


            public function get_code($code){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $user = $dbu->prepare("SELECT * FROM subcriptions WHERE subcriptions_code = :subcriptions_code");
                    $user->execute(['subcriptions_code' => $code]);
                    return $user->fetch();
                  }catch(Exception $e){
                    die($e->getMessage());
                }
            } 
            public function get_code_by_customer($subcriptions_customer){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $user = $dbu->prepare("SELECT * FROM subcriptions WHERE subcriptions_customer = :subcriptions_customer");
                    $user->execute(['subcriptions_customer' => $subcriptions_customer]);
                    return $user->fetch();
                  }catch(Exception $e){
                    die($e->getMessage());
                }
            } 
            
            public function hwid_code_edit($subcription_hwid,$subcription_code){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $sql = "UPDATE users SET subcription_hwid=:subcription_hwid  WHERE subcription_code = :subcription_code";
                    $status = $dbu->prepare($sql)->execute(
                    [
                        'subcription_hwid' => $subcription_hwid,
                        'subcription_code' => $subcription_code
                    ]);
                    
                    return $status;
                } catch (Exception $e){
                    die($e->getMessage());
                }
            }

            public function add_new_codee($subcriptions_code,$subcriptions_customer,$subcriptions_email_customer){
                try{
                    $db = new DB();
                    $dbu = $db->getDB();
                    $sql = "INSERT INTO subcriptions (subcriptions_code,subcriptions_customer,subcriptions_email_customer) VALUES (:subcriptions_code,:subcriptions_customer,:subcriptions_email_customer)";
                    $status = $dbu->prepare($sql)->execute(
                    [
                        'subcriptions_code' => $subcriptions_code,
                        'subcriptions_customer' => $subcriptions_customer,
                        'subcriptions_email_customer' => $subcriptions_email_customer
                    ]);
                    
                    return $status;
                } catch (Exception $e){
                    die($e->getMessage());
                }
            }

    }