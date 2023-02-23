const pool = require("../database/index");
const postsController = {

    getAll: async (req, res) => {
        try{
            const {id_piece} = req.params
            const [rows, fields] = await pool.query("SELECT date_information, valeur, type, informations_capteurs.id_capteur, capteurs.nom as nom_capteurs ,capteurs.id_piece, piece.nom as nom_piece, superficie, type_capteurs.nom as type_capteurs, unité FROM informations_capteurs INNER JOIN capteurs ON informations_capteurs.id_capteur = capteurs.id INNER JOIN piece ON piece.id = capteurs.id_piece INNER JOIN type_capteurs ON capteurs.type = type_capteurs.id WHERE capteurs.id_piece = ?", [id_piece])
            res.json({
                data: rows
        })
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },

    get_users: async (req, res) => {
        try{
            const [rows, fields] = await pool.query("SELECT id, utilisateur, nom, prenom, mail, date_creation FROM users ")
            res.json({
                data: rows
        })
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },

    get_connection: async (req, res) => {
        try{
            const { username, password } = req.params
            const [rows, fields] = await pool.query("SELECT * from users where utilisateur = ? AND mdp = ?", [username, password])
            res.json({
                data: rows
        })
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },

    get_information: async (req, res) => {
        try {
          const { id_piece } = req.params;
      
          const query = "SELECT ic.date_information, GROUP_CONCAT(IF(c.type = 1, ic.valeur, NULL) ORDER BY c.id SEPARATOR ', ') AS informations_type_temperature, GROUP_CONCAT(IF(c.type = 2, ic.valeur, NULL) ORDER BY c.id SEPARATOR ', ') AS informations_type_humidite FROM informations_capteurs ic JOIN capteurs c ON ic.id_capteur = c.id WHERE c.id_piece = ? GROUP BY ic.date_information DESC LIMIT 1";
          
          const params = [id_piece];
      
          const [rows, fields] = await pool.query(query, params);
      
          let informations_type_temperature = null;
      
          if (rows[0].informations_type_temperature) {
            informations_type_temperature = rows[0].informations_type_temperature;
          } else {
            const random_temperature = Math.floor(Math.random() * (25 - 15 + 1) + 15);
            informations_type_temperature = `${random_temperature}`;
          }

          /*let informations_type_humidite = null;
      
          if (rows[0].informations_type_humidite) {
            informations_type_humidite = rows[0].informations_type_humidite;
          } else {
            const random_humidite = Math.floor(Math.random() * (25 - 15 + 1) + 15);
            informations_type_humidite = `${random_humidite}`;
          }*/
      
          res.json({
            data: {
              informations_type_temperature,
              informations_type_humidite: rows[0].informations_type_humidite || null,
            },
          });
        } catch (error) {
          console.log(error);
          res.json({
            status: "error",
          });
        }
      },
      
    

      get_informations: async (req, res) => {
        try{
            const{id_piece} = req.params
            const [rows, fields] = await pool.query("SELECT ic.date_information, GROUP_CONCAT(ic1.valeur ORDER BY ic1.id_capteur SEPARATOR ', ') AS informations_type_humidité, GROUP_CONCAT(ic2.valeur ORDER BY ic2.id_capteur SEPARATOR ', ') AS informations_type_température FROM informations_capteurs ic LEFT JOIN capteurs c1 ON ic.id_capteur = c1.id AND c1.type = 1 LEFT JOIN informations_capteurs ic1 ON ic1.id_capteur = c1.id AND ic.date_information = ic1.date_information LEFT JOIN capteurs c2 ON ic.id_capteur = c2.id AND c2.type = 2 LEFT JOIN informations_capteurs ic2 ON ic2.id_capteur = c2.id AND ic.date_information = ic2.date_information WHERE c1.id_piece = ? GROUP BY ic.date_information", [id_piece])
            res.json({
                data: rows
        })
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },      

    getById: async (req, res) => {
        try{
            const { id } = req.params
            const [rows, fields] = await pool.query("SELECT date_information, valeur, type,informations_capteurs.id_capteur, capteurs.nom as nom_capteurs,capteurs.id_piece, piece.nom as nom_piece, superficie, type_capteurs.nom as type_capteurs, unité FROM informations_capteurs INNER JOIN capteurs ON informations_capteurs.id_capteur = capteurs.id INNER JOIN piece ON piece.id = capteurs.id_piece INNER JOIN type_capteurs ON capteurs.type = type_capteurs.id WHERE capteurs.id= ?", [id])
            res.json({
                data: rows
        })
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    }, 

    create: async (req, res) => {
        try{
            const { utilisateur, mdp, nom, prenom, mail } = req.body
            // const sql = "insert into piece (nom, superficie) values (?,?)";
            const sql = "INSERT INTO users SET utilisateur = ?, mdp = ?, nom = ?, prenom = ?, mail = ?, date_creation = NOW()"
            const [rows, fields] = await pool.query(sql, [utilisateur, mdp, nom, prenom, mail])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    }, 

    create_capteurs: async (req, res) => {
        try{
            const { id_capteurs, valeur } = req.body
            // const sql = "insert into piece (nom, superficie) values (?,?)";
            const sql = "INSERT INTO informations_capteurs SET id_capteur = ?, valeur = ?, date_information=NOW()"
            const [rows, fields] = await pool.query(sql, [id_capteurs, valeur])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },

    /*create_piece: async (req, res) => {
        try{
            const { nom, superficie } = req.body
            // const sql = "insert into piece (nom, superficie) values (?,?)";
            const sql = "INSERT INTO piece SET nom = ?, superficie = ?"
            const [rows, fields] = await pool.query(sql, [nom, superficie])
            const sql2 = "INSERT INTO capteurs SET nom = Capteur 1 AND nom = Capteur 2 WHERE piece.nom = id_piece"
            const [rows2, fields2] = await pool.query(sql2, [nom, superficie])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },*/

    update: async (req, res) => {
        try{
            const { utilisateur, mdp, nom, prenom, mail } = req.body
            const { id } = req.params
            const sql = "update users set utilisateur = ?, mdp = ?, nom = ?, prenom = ?, mail = ? where id = ?"
            const [rows, fields] = await pool.query(sql, [utilisateur, mdp, nom, prenom, mail, id])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    }, 

    delete_users: async (req, res) => {
        try{
            const { id } = req.params
            const [rows, fields] = await pool.query("delete from users where id = ?", [id])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    }, 

    delete_capteurs: async (req, res) => {
        try{
            const { id } = req.params
            const [rows, fields] = await pool.query("delete from informations_capteurs where id = ?", [id])
            res.json({
                data: rows
            }) 
        } catch (error) {
            console.log(error)
            res.json({
                status: "error"
        })
        }
    },
}

module.exports = postsController