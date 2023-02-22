const pool = require("../database/index")
const postsController = {

    getAll: async (req, res) => {
        try{
            const [rows, fields] = await pool.query("SELECT date_information, information, type,informations_capteurs.id_capteur, capteurs.nom as nom_capteurs,capteurs.id_maison, maison.nom as nom_maison, superficie, type_capteurs.nom as type_capteurs, unité FROM informations_capteurs INNER JOIN capteurs ON informations_capteurs.id_capteur = capteurs.id INNER JOIN maison ON maison.id = capteurs.id_maison INNER JOIN type_capteurs ON capteurs.type = type_capteurs.id;")
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
            const [rows, fields] = await pool.query("SELECT id, utilisateur, nom, prenom, mail, date_creation, id_users, id_maison from users INNER JOIN users_maison ON users.id = users_maison.id_users")
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
    

    getById: async (req, res) => {
        try{
            const { id } = req.params
            const [rows, fields] = await pool.query("SELECT date_information, information, type,informations_capteurs.id_capteur, capteurs.nom as nom_capteurs,capteurs.id_maison, maison.nom as nom_maison, superficie, type_capteurs.nom as type_capteurs, unité FROM informations_capteurs INNER JOIN capteurs ON informations_capteurs.id_capteur = capteurs.id INNER JOIN maison ON maison.id = capteurs.id_maison INNER JOIN type_capteurs ON capteurs.type = type_capteurs.id WHERE capteurs.id= ?", [id])
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
            // const sql = "insert into maison (nom, superficie) values (?,?)";
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
    
    capteurs: async (req, res) => {
        try{
            const { id, type } = req.body
            // const sql = "insert into maison (nom, superficie) values (?,?)";
            const sql = "INSERT INTO users SET date_information = ?, information = ?"
            const [rows, fields] = await pool.query(sql, [type, id])
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