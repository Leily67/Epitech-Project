class CreateInventaire < ActiveRecord::Migration[7.0]
  def change
    create_table :inventaires do |t|
      t.string :reponse
      t.belongs_to :joueur
      t.belongs_to :objet
      t.boolean :equipe

      t.timestamps
    end
  end
end
