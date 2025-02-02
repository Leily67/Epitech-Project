class CreatePnj < ActiveRecord::Migration[7.0]
  def change
    create_table :pnjs do |t|
      t.string :name
      t.string :avatar
      t.integer :vie
      t.integer :force

      t.timestamps
    end
  end
end
