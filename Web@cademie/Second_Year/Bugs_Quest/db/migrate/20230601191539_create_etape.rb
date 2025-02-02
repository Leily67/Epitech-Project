class CreateEtape < ActiveRecord::Migration[7.0]
  def change
    create_table :etapes do |t|
      t.integer :numero
      t.string :question
      t.string :choix
      t.string :reponse
      t.belongs_to :quest
      t.belongs_to :pnj

      t.timestamps
    end
  end
end
