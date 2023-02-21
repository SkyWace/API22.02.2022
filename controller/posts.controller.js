const pool = require("../database/index")
const postsController = {

    getAll: async (req, res) => {
        try{
            const [rows, fields] = await pool.query("select * from maison")
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
            const [rows, fields] = await pool.query("select * from maison where id = ?", [id])
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
            const { nom, superficie } = req.body
            const sql = "insert into maison (nom, superficie) values (?,?)"
            const [rows, fields] = await pool.query(sql, [nom, superficie])
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
            const { nom, superficie } = req.body
            const { id } = req.params
            const sql = "update maison set nom = ?, superficie = ? where id = ?"
            const [rows, fields] = await pool.query(sql, [nom, superficie, id])
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

    delete: async (req, res) => {
        try{
            const { id } = req.params
            const [rows, fields] = await pool.query("delete from maison where id = ?", [id])
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