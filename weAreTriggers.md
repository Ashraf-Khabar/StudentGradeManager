# Triggers : 

[Users Triggers](#users-triger-)<br>


#### Users triger : 
```sql
create or replace trigger TRIGGER_USER
    after insert or delete
    on USERS
    for each row
begin
    if inserting then
        if :NEW.ROLE = 'eleve' then
            insert into ELEVES (ID, CODE, NOM, PRENOM, NIVEAU, CODE_FIL, LOGIN, CREATED_AT, UPDATED_AT)
            values (:NEW.ID , dbms_random.string('U', 8) , :NEW.NAME , :NEW.NAME , 'GINF1' , '1' , :NEW.login , :NEW.CREATED_AT , :NEW.UPDATED_AT ) ;
        elsif :NEW.ROLE = 'resp' then
            insert into RESPONSABLE_FILIERES(ID, NOM, PRENOM, DEPARTEMENT, LOGIN, CREATED_AT, UPDATED_AT)
            VALUES (:NEW.ID , :NEW.NAME , :NEW.NAME , '----' , :NEW.LOGIN , :NEW.CREATED_AT , :NEW.UPDATED_AT) ;
        end if ;
    elsif deleting then
        if :NEW.ROLE = 'eleve' then
            delete from ELEVES where ID = :OLD.ID ;
        elsif :NEW.ROLE = 'resp' then
            delete from RESPONSABLE_FILIERES where ID = :OLD.ID ;
        else
            raise_application_error(-2202020 , 'EROOR MESSAGE') ;
        end if ;
    end if ;
end;
```

#### Moy Trigger : 
```sql
create or replace trigger MOY_INSERT_TRIGGER
    after insert
    on NOTES
    for each row
declare
    Moy float ;
    Code_filiere varchar(255) ;
    Level_etu varchar(255) ;
    Num_matiere number ;
    Num_note number ;
begin
    select AVG(NOTE) into Moy from NOTES where CODE_ELEVE = :NEW.CODE_ELEVE ;
    select NIVEAU into Level_etu from ELEVES where ELEVES.CODE = new.CODE_ELEVE;
    select FIL.CODE into Code_filiere from FILIERES FIL , ELEVES ELE where ELE.CODE_FIL = FIL.CODE and ELE.CODE = :NEW.CODE_ELEVE;

    select count(*) into Num_matiere from FILIERES FIL , MODULES MOD , ELEMENT__MODULES ELEM_MOD where FIL.CODE = MOD.CODE_FIL
                                                                                                   and MOD.CODE = ELEM_MOD.CODE_MOD and FIL.CODE = Code_filiere and MOD.NIVEAU = Level_etu ;

    select count(*) into Num_note from NOTES where CODE_ELEVE = :NEW.CODE_ELEVE ;

    if Num_matiere = Num_note then
        insert into MOYENNES (ID, CODE_ELEVE, CODE_FIL, NIVEAU, NOTE, CREATED_AT, UPDATED_AT)
        values (:NEW.ID , :NEW.CODE_ELEVE , :NEW.CODE_FIL, :NEW.NIVEAU , :NEW.NOTE , :NEW.CREATED_AT , :NEW.UPDATED_AT ) ;
    end if ;
end ;
```
















































