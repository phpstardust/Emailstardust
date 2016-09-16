<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
</head>
<?php echo $this->Emailstardust->body(); ?>
<?php echo $this->Emailstardust->table(); ?>
    <tr>
        <?php echo $this->Emailstardust->td(); ?>

            <?php echo $this->Emailstardust->tableHeading(); ?>
            
                <?php echo $this->Emailstardust->heading(); ?>
                
                <tr>
                    <?php echo $this->Emailstardust->tdContent(); ?>

                        <?php echo $this->Emailstardust->message(); ?>

                        <?php echo $this->Emailstardust->tableHeading(); ?>
                        
                        <?php echo $this->Emailstardust->callToAction(); ?>
                            
                        </table>

                        <?php echo $this->Emailstardust->website(); ?>

                        <?php echo $this->Emailstardust->author(); ?>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <?php echo $this->Emailstardust->td(); ?>
        
            <?php echo $this->Emailstardust->tableHeading(); ?>
                <tr>
                
                    <?php echo $this->Emailstardust->tdFooter(); ?>
                    
                        <?php echo $this->Emailstardust->footer(); ?>
                        
                        <?php echo $this->Emailstardust->social(); ?>
                        
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
