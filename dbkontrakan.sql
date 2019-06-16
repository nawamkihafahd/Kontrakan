DELIMITER $$

USE `sistem kontrakan`$$

DROP PROCEDURE IF EXISTS `sp_lihatNotaInd`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_lihatNotaInd`(p_id VARCHAR (9))
BEGIN
		SELECT * FROM `nota_individu` WHERE NI_ID = p_id;
    END$$

DELIMITER ;