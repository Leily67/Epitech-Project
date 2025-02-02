# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# This file is the source Rails uses to define your schema when running `bin/rails
# db:schema:load`. When creating a new database, `bin/rails db:schema:load` tends to
# be faster and is potentially less error prone than running all of your
# migrations from scratch. Old migrations may fail to apply correctly if those
# migrations use external dependencies or application code.
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema[7.0].define(version: 2023_06_01_195955) do
  create_table "etapes", force: :cascade do |t|
    t.integer "numero"
    t.string "question"
    t.string "choix"
    t.string "reponse"
    t.integer "quest_id"
    t.integer "pnj_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["pnj_id"], name: "index_etapes_on_pnj_id"
    t.index ["quest_id"], name: "index_etapes_on_quest_id"
  end

  create_table "inventaires", force: :cascade do |t|
    t.string "reponse"
    t.integer "joueur_id"
    t.integer "objet_id"
    t.boolean "equipe"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["joueur_id"], name: "index_inventaires_on_joueur_id"
    t.index ["objet_id"], name: "index_inventaires_on_objet_id"
  end

  create_table "joueurs", force: :cascade do |t|
    t.string "name"
    t.integer "niveau"
    t.integer "force"
    t.integer "vie"
    t.integer "xp"
    t.boolean "mort"
    t.integer "points"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "objets", force: :cascade do |t|
    t.string "name"
    t.string "avatar"
    t.string "obj_type"
    t.integer "force"
    t.integer "vie"
    t.integer "xp"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "pnjs", force: :cascade do |t|
    t.string "name"
    t.string "avatar"
    t.integer "vie"
    t.integer "force"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "progresses", force: :cascade do |t|
    t.boolean "done"
    t.integer "numero_etape"
    t.integer "type"
    t.integer "vie"
    t.integer "vie_pnj"
    t.integer "joueur_id"
    t.integer "quest_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["joueur_id"], name: "index_progresses_on_joueur_id"
    t.index ["quest_id"], name: "index_progresses_on_quest_id"
  end

  create_table "quests", force: :cascade do |t|
    t.string "name"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

end
