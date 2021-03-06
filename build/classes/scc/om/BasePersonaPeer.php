<?php


/**
 * Base static class for performing query and update operations on the 'persona' table.
 *
 * 
 *
 * @package    propel.generator.scc.om
 */
abstract class BasePersonaPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'scc';

	/** the table name for this class */
	const TABLE_NAME = 'persona';

	/** the related Propel class for this table */
	const OM_CLASS = 'Persona';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'scc.Persona';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PersonaTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 14;

	/** the column name for the ID_PERSONA field */
	const ID_PERSONA = 'persona.ID_PERSONA';

	/** the column name for the ID_CARGO field */
	const ID_CARGO = 'persona.ID_CARGO';

	/** the column name for the NOMBRE field */
	const NOMBRE = 'persona.NOMBRE';

	/** the column name for the APELLIDO field */
	const APELLIDO = 'persona.APELLIDO';

	/** the column name for the EMAIL field */
	const EMAIL = 'persona.EMAIL';

	/** the column name for the IDENTIFICACION field */
	const IDENTIFICACION = 'persona.IDENTIFICACION';

	/** the column name for the FECHA_NACIMIENTO field */
	const FECHA_NACIMIENTO = 'persona.FECHA_NACIMIENTO';

	/** the column name for the ESTADO field */
	const ESTADO = 'persona.ESTADO';

	/** the column name for the CLAVE field */
	const CLAVE = 'persona.CLAVE';

	/** the column name for the FECHA_INGRESO field */
	const FECHA_INGRESO = 'persona.FECHA_INGRESO';

	/** the column name for the FECHA_SALIDA field */
	const FECHA_SALIDA = 'persona.FECHA_SALIDA';

	/** the column name for the AUTORIZA_PAGO field */
	const AUTORIZA_PAGO = 'persona.AUTORIZA_PAGO';

	/** the column name for the ADMINISTRADOR field */
	const ADMINISTRADOR = 'persona.ADMINISTRADOR';

	/** the column name for the CONTROL_CAJAS field */
	const CONTROL_CAJAS = 'persona.CONTROL_CAJAS';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of Persona objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Persona[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdPersona', 'IdCargo', 'Nombre', 'Apellido', 'Email', 'Identificacion', 'FechaNacimiento', 'Estado', 'Clave', 'FechaIngreso', 'FechaSalida', 'AutorizaPago', 'Administrador', 'ControlCajas', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPersona', 'idCargo', 'nombre', 'apellido', 'email', 'identificacion', 'fechaNacimiento', 'estado', 'clave', 'fechaIngreso', 'fechaSalida', 'autorizaPago', 'administrador', 'controlCajas', ),
		BasePeer::TYPE_COLNAME => array (self::ID_PERSONA, self::ID_CARGO, self::NOMBRE, self::APELLIDO, self::EMAIL, self::IDENTIFICACION, self::FECHA_NACIMIENTO, self::ESTADO, self::CLAVE, self::FECHA_INGRESO, self::FECHA_SALIDA, self::AUTORIZA_PAGO, self::ADMINISTRADOR, self::CONTROL_CAJAS, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA', 'ID_CARGO', 'NOMBRE', 'APELLIDO', 'EMAIL', 'IDENTIFICACION', 'FECHA_NACIMIENTO', 'ESTADO', 'CLAVE', 'FECHA_INGRESO', 'FECHA_SALIDA', 'AUTORIZA_PAGO', 'ADMINISTRADOR', 'CONTROL_CAJAS', ),
		BasePeer::TYPE_FIELDNAME => array ('id_persona', 'id_cargo', 'nombre', 'apellido', 'email', 'identificacion', 'fecha_nacimiento', 'estado', 'clave', 'fecha_ingreso', 'fecha_salida', 'autoriza_pago', 'administrador', 'control_cajas', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdPersona' => 0, 'IdCargo' => 1, 'Nombre' => 2, 'Apellido' => 3, 'Email' => 4, 'Identificacion' => 5, 'FechaNacimiento' => 6, 'Estado' => 7, 'Clave' => 8, 'FechaIngreso' => 9, 'FechaSalida' => 10, 'AutorizaPago' => 11, 'Administrador' => 12, 'ControlCajas' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idPersona' => 0, 'idCargo' => 1, 'nombre' => 2, 'apellido' => 3, 'email' => 4, 'identificacion' => 5, 'fechaNacimiento' => 6, 'estado' => 7, 'clave' => 8, 'fechaIngreso' => 9, 'fechaSalida' => 10, 'autorizaPago' => 11, 'administrador' => 12, 'controlCajas' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID_PERSONA => 0, self::ID_CARGO => 1, self::NOMBRE => 2, self::APELLIDO => 3, self::EMAIL => 4, self::IDENTIFICACION => 5, self::FECHA_NACIMIENTO => 6, self::ESTADO => 7, self::CLAVE => 8, self::FECHA_INGRESO => 9, self::FECHA_SALIDA => 10, self::AUTORIZA_PAGO => 11, self::ADMINISTRADOR => 12, self::CONTROL_CAJAS => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA' => 0, 'ID_CARGO' => 1, 'NOMBRE' => 2, 'APELLIDO' => 3, 'EMAIL' => 4, 'IDENTIFICACION' => 5, 'FECHA_NACIMIENTO' => 6, 'ESTADO' => 7, 'CLAVE' => 8, 'FECHA_INGRESO' => 9, 'FECHA_SALIDA' => 10, 'AUTORIZA_PAGO' => 11, 'ADMINISTRADOR' => 12, 'CONTROL_CAJAS' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id_persona' => 0, 'id_cargo' => 1, 'nombre' => 2, 'apellido' => 3, 'email' => 4, 'identificacion' => 5, 'fecha_nacimiento' => 6, 'estado' => 7, 'clave' => 8, 'fecha_ingreso' => 9, 'fecha_salida' => 10, 'autoriza_pago' => 11, 'administrador' => 12, 'control_cajas' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. PersonaPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PersonaPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(PersonaPeer::ID_PERSONA);
			$criteria->addSelectColumn(PersonaPeer::ID_CARGO);
			$criteria->addSelectColumn(PersonaPeer::NOMBRE);
			$criteria->addSelectColumn(PersonaPeer::APELLIDO);
			$criteria->addSelectColumn(PersonaPeer::EMAIL);
			$criteria->addSelectColumn(PersonaPeer::IDENTIFICACION);
			$criteria->addSelectColumn(PersonaPeer::FECHA_NACIMIENTO);
			$criteria->addSelectColumn(PersonaPeer::ESTADO);
			$criteria->addSelectColumn(PersonaPeer::CLAVE);
			$criteria->addSelectColumn(PersonaPeer::FECHA_INGRESO);
			$criteria->addSelectColumn(PersonaPeer::FECHA_SALIDA);
			$criteria->addSelectColumn(PersonaPeer::AUTORIZA_PAGO);
			$criteria->addSelectColumn(PersonaPeer::ADMINISTRADOR);
			$criteria->addSelectColumn(PersonaPeer::CONTROL_CAJAS);
		} else {
			$criteria->addSelectColumn($alias . '.ID_PERSONA');
			$criteria->addSelectColumn($alias . '.ID_CARGO');
			$criteria->addSelectColumn($alias . '.NOMBRE');
			$criteria->addSelectColumn($alias . '.APELLIDO');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.IDENTIFICACION');
			$criteria->addSelectColumn($alias . '.FECHA_NACIMIENTO');
			$criteria->addSelectColumn($alias . '.ESTADO');
			$criteria->addSelectColumn($alias . '.CLAVE');
			$criteria->addSelectColumn($alias . '.FECHA_INGRESO');
			$criteria->addSelectColumn($alias . '.FECHA_SALIDA');
			$criteria->addSelectColumn($alias . '.AUTORIZA_PAGO');
			$criteria->addSelectColumn($alias . '.ADMINISTRADOR');
			$criteria->addSelectColumn($alias . '.CONTROL_CAJAS');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PersonaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersonaPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Persona
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PersonaPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return PersonaPeer::populateObjects(PersonaPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PersonaPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Persona $value A Persona object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdPersona();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Persona object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Persona) {
				$key = (string) $value->getIdPersona();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Persona object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Persona Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to persona
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = PersonaPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PersonaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PersonaPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PersonaPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Persona object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PersonaPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PersonaPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PersonaPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = PersonaPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PersonaPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Cargo table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCargo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PersonaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersonaPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PersonaPeer::ID_CARGO, CargoPeer::ID_CARGO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Persona objects pre-filled with their Cargo objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Persona objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCargo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PersonaPeer::addSelectColumns($criteria);
		$startcol = PersonaPeer::NUM_HYDRATE_COLUMNS;
		CargoPeer::addSelectColumns($criteria);

		$criteria->addJoin(PersonaPeer::ID_CARGO, CargoPeer::ID_CARGO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PersonaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PersonaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PersonaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PersonaPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = CargoPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = CargoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CargoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					CargoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Persona) to $obj2 (Cargo)
				$obj2->addPersona($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PersonaPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersonaPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PersonaPeer::ID_CARGO, CargoPeer::ID_CARGO, $join_behavior);

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of Persona objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Persona objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PersonaPeer::addSelectColumns($criteria);
		$startcol2 = PersonaPeer::NUM_HYDRATE_COLUMNS;

		CargoPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + CargoPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(PersonaPeer::ID_CARGO, CargoPeer::ID_CARGO, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PersonaPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PersonaPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PersonaPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PersonaPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Cargo rows

			$key2 = CargoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = CargoPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CargoPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					CargoPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Persona) to the collection in $obj2 (Cargo)
				$obj2->addPersona($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BasePersonaPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePersonaPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PersonaTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? PersonaPeer::CLASS_DEFAULT : PersonaPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Persona or Criteria object.
	 *
	 * @param      mixed $values Criteria or Persona object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Persona object
		}

		if ($criteria->containsKey(PersonaPeer::ID_PERSONA) && $criteria->keyContainsValue(PersonaPeer::ID_PERSONA) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersonaPeer::ID_PERSONA.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Persona or Criteria object.
	 *
	 * @param      mixed $values Criteria or Persona object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PersonaPeer::ID_PERSONA);
			$value = $criteria->remove(PersonaPeer::ID_PERSONA);
			if ($value) {
				$selectCriteria->add(PersonaPeer::ID_PERSONA, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PersonaPeer::TABLE_NAME);
			}

		} else { // $values is Persona object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the persona table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PersonaPeer::TABLE_NAME, $con, PersonaPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PersonaPeer::clearInstancePool();
			PersonaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Persona or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Persona object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PersonaPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Persona) { // it's a model object
			// invalidate the cache for this single object
			PersonaPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PersonaPeer::ID_PERSONA, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				PersonaPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			PersonaPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Persona object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Persona $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PersonaPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PersonaPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(PersonaPeer::DATABASE_NAME, PersonaPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Persona
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PersonaPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PersonaPeer::DATABASE_NAME);
		$criteria->add(PersonaPeer::ID_PERSONA, $pk);

		$v = PersonaPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PersonaPeer::DATABASE_NAME);
			$criteria->add(PersonaPeer::ID_PERSONA, $pks, Criteria::IN);
			$objs = PersonaPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePersonaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePersonaPeer::buildTableMap();

