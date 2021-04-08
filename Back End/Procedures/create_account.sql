CREATE PROCEDURE `create_account` (
    IN _name
    IN _password
    IN _email
    IN _doc
    IN _address
    IN _cert
    IN _shop
)
BEGIN

INSERT INTO account( id, password, email, date_of_creation)
VALUES(_name, _password, _email, _doc)

IF _address is NOT NULL

INSERT INTO mechanic(id, address) VALUES (_name, _address)

IF _cert and _shop is NOT NULL

INSERT INTO professional(id, certification, shop_name) VALUES (_name, _cert, _shop)

IF _cert and _shop is NULL

INSERT INTO amateur(id) VALUES (_name)

END

